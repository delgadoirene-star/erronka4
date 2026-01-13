const bcrypt = require('bcryptjs');
const jwt = require('jsonwebtoken');
const speakeasy = require('speakeasy');
const QRCode = require('qrcode');

// Erabiltzaileen biltegiratze sinplea (ekoizpenean datu-basea erabili beharko litzateke)
const users = [];

// JWT tokena sortzeko funtzioa
const generateToken = (userId) => jwt.sign({ userId }, process.env.JWT_SECRET, {
  expiresIn: process.env.JWT_EXPIRES_IN || '1h'
});

// Erabiltzailea erregistratzeko funtzioa
const register = async (req, res) => {
  try {
    const { username, email, password } = req.body;

    // Egiaztatu erabiltzailea jada existitzen den
    const existingUser = users.find((u) => u.username === username || u.email === email);
    if (existingUser) {
      return res.status(400).json({ error: 'Erabiltzailea jada existitzen da' });
    }

    // Pasahitza hash-eatu segurtasunerako
    const hashedPassword = await bcrypt.hash(password, 10);
    const user = {
      id: users.length + 1,
      username,
      email,
      password: hashedPassword,
      mfaEnabled: false,
      mfaSecret: null
    };

    // Erabiltzailea gorde eta tokena sortu
    users.push(user);
    const token = generateToken(user.id);

    res.status(201).json({
      message: 'Erabiltzailea ondo sortu da',
      token,
      userId: user.id
    });
  } catch (error) {
    res.status(500).json({ error: 'Errorea erregistratzerakoan' });
  }
};

// Saioa hasteko funtzioa
const login = async (req, res) => {
  try {
    const { username, password } = req.body;

    // Bilatu erabiltzailea
    const user = users.find((u) => u.username === username);
    if (!user) {
      return res.status(401).json({ error: 'Erabiltzailea edo pasahitza okerra' });
    }

    // Egiaztatu pasahitza
    const isValidPassword = await bcrypt.compare(password, user.password);
    if (!isValidPassword) {
      return res.status(401).json({ error: 'Erabiltzailea edo pasahitza okerra' });
    }

    // MFA gaituta badago, kodea eskatu
    if (user.mfaEnabled) {
      return res.json({
        requiresMFA: true,
        userId: user.id,
        message: 'MFA kodea behar da'
      });
    }

    // Tokena sortu eta itzuli
    const token = generateToken(user.id);
    res.json({ token, userId: user.id });
  } catch (error) {
    res.status(500).json({ error: 'Errorea saioa hastean' });
  }
};

// MFA konfiguratzeko funtzioa
const setupMFA = async (req, res) => {
  try {
    const { userId } = req;
    const user = users.find((u) => u.id === userId);

    if (!user) {
      return res.status(404).json({ error: 'Erabiltzailea ez da aurkitu' });
    }

    if (user.mfaEnabled) {
      return res.status(400).json({ error: 'MFA jada gaituta dago' });
    }

    // MFA sekretua sortu
    const secret = speakeasy.generateSecret({
      name: `ZabalaGailetak (${user.username})`,
      issuer: process.env.MFA_ISSUER || 'ZabalaGailetak'
    });

    user.mfaSecret = secret.base32;

    // QR kodea sortu erabiltzaileak eskaneatzeko
    const qrCodeUrl = await QRCode.toDataURL(secret.otpauth_url);

    res.json({
      secret: secret.base32,
      qrCode: qrCodeUrl,
      message: 'Eskaneatu QR kodea autentikatzaile aplikazioarekin'
    });
  } catch (error) {
    res.status(500).json({ error: 'Errorea MFA konfiguratzean' });
  }
};

// MFA egiaztatzeko funtzioa
const verifyMFA = async (req, res) => {
  try {
    const { userId } = req;
    const { token } = req.body;

    const user = users.find((u) => u.id === userId);
    if (!user || !user.mfaSecret) {
      return res.status(404).json({ error: 'MFA ez dago konfiguratuta' });
    }

    // TOTP kodea egiaztatu
    const verified = speakeasy.totp.verify({
      secret: user.mfaSecret,
      encoding: 'base32',
      token
    });

    if (verified) {
      // Lehen aldia bada, gaitu MFA
      if (!user.mfaEnabled) {
        user.mfaEnabled = true;
        return res.json({
          message: 'MFA ondo gaitu da',
          enabled: true
        });
      }

      // Saio hasiera bada, tokena itzuli
      const authToken = generateToken(user.id);
      res.json({ token: authToken, message: 'MFA balidazioa arrakastatsua' });
    } else {
      res.status(401).json({ error: 'MFA kodea baliogabea' });
    }
  } catch (error) {
    res.status(500).json({ error: 'Errorea MFA balidatzean' });
  }
};

// MFA desgaitzeko funtzioa
const disableMFA = async (req, res) => {
  try {
    const { userId } = req;
    const user = users.find((u) => u.id === userId);

    if (!user) {
      return res.status(404).json({ error: 'Erabiltzailea ez da aurkitu' });
    }

    user.mfaEnabled = false;
    user.mfaSecret = null;

    res.json({ message: 'MFA desgaitu da' });
  } catch (error) {
    res.status(500).json({ error: 'Errorea MFA desgaitzean' });
  }
};

// Autentifikazio middleware-a
const authMiddleware = (req, res, next) => {
  const token = req.header('Authorization')?.replace('Bearer ', '');

  if (!token) {
    return res.status(401).json({ error: 'Sarbidea ukatua: tokenik ez' });
  }

  try {
    // Tokena egiaztatu
    const decoded = jwt.verify(token, process.env.JWT_SECRET);
    req.userId = decoded.userId;
    next();
  } catch (error) {
    res.status(401).json({ error: 'Token baliogabea' });
  }
};

module.exports = {
  register,
  login,
  setupMFA,
  verifyMFA,
  disableMFA,
  authMiddleware,
  users
};
