const mongoose = require('mongoose');
const bcrypt = require('bcrypt');

const userSchema = new mongoose.Schema({
  username: {
    type: String,
    required: [true, 'Erabiltzaile-izena beharrezkoa da'],
    unique: true,
    trim: true,
    minlength: [3, 'Erabiltzaile-izenak gutxienez 3 karaktere izan behar ditu'],
    maxlength: [30, 'Erabiltzaile-izenak ezin ditu 30 karaktere baino gehiago izan'],
    index: true
  },
  email: {
    type: String,
    required: [true, 'Emaila beharrezkoa da'],
    unique: true,
    lowercase: true,
    trim: true,
    match: [/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/, 'Mesedez, eman baliozko email bat']
  },
  password: {
    type: String,
    required: [true, 'Pasahitza beharrezkoa da'],
    minlength: [8, 'Pasahitzak gutxienez 8 karaktere izan behar ditu'],
    select: false // Ez itzuli pasahitza lehenespenez
  },
  role: {
    type: String,
    enum: ['user', 'admin'],
    default: 'user'
  },
  mfaEnabled: {
    type: Boolean,
    default: false
  },
  mfaSecret: {
    type: String,
    select: false // Ez itzuli MFA sekretua lehenespenez
  },
  failedLoginAttempts: {
    type: Number,
    default: 0
  },
  accountLocked: {
    type: Boolean,
    default: false
  },
  lockUntil: {
    type: Date
  },
  lastLogin: {
    type: Date
  },
  passwordChangedAt: {
    type: Date
  },
  createdAt: {
    type: Date,
    default: Date.now
  },
  updatedAt: {
    type: Date,
    default: Date.now
  }
}, {
  timestamps: true
});

// Indizea kontsulta eraginkorretarako
userSchema.index({ email: 1 });
userSchema.index({ accountLocked: 1, lockUntil: 1 });

// Pasahitza hash-eatu gorde aurretik
userSchema.pre('save', async function(next) {
  // Pasahitza aldatu bada bakarrik hash-eatu
  if (!this.isModified('password')) return next();
  
  try {
    const salt = await bcrypt.genSalt(12);
    this.password = await bcrypt.hash(this.password, salt);
    
    // Ezarri pasahitz aldaketa denbora-marka
    if (!this.isNew) {
      this.passwordChangedAt = Date.now() - 1000; // Segundo 1 kendu JWT pasahitz aldaketaren ondoren jaulki dela ziurtatzeko
    }
    
    next();
  } catch (error) {
    next(error);
  }
});

// Pasahitza konparatzeko metodoa
userSchema.methods.comparePassword = async function(candidatePassword) {
  return await bcrypt.compare(candidatePassword, this.password);
};

// Kontua blokeatuta dagoen egiaztatzeko metodoa
userSchema.methods.isLocked = function() {
  // Egiaztatu kontua blokeatuta dagoen eta blokeoa ez den iraungi
  return !!(this.accountLocked && this.lockUntil && this.lockUntil > Date.now());
};

// Huts egindako saio-hasiera saiakerak handitzeko metodoa
userSchema.methods.incrementLoginAttempts = async function() {
  // Berrezarri saiakerak blokeoa iraungi bada
  if (this.lockUntil && this.lockUntil < Date.now()) {
    return await this.updateOne({
      $set: {
        failedLoginAttempts: 1,
        accountLocked: false,
        lockUntil: null
      }
    });
  }
  
  // Handitu saiakerak
  const updates = { $inc: { failedLoginAttempts: 1 } };
  
  // Blokeatu kontua 5 saiakera okerren ondoren (30 minutu)
  const maxAttempts = 5;
  const lockTime = 30 * 60 * 1000; // 30 minutu
  
  if (this.failedLoginAttempts + 1 >= maxAttempts && !this.accountLocked) {
    updates.$set = {
      accountLocked: true,
      lockUntil: Date.now() + lockTime
    };
  }
  
  return await this.updateOne(updates);
};

// Saio-hasiera saiakerak berrezartzeko metodoa
userSchema.methods.resetLoginAttempts = async function() {
  return await this.updateOne({
    $set: {
      failedLoginAttempts: 0,
      accountLocked: false,
      lockUntil: null,
      lastLogin: Date.now()
    }
  });
};

// Birtuala pasahitza JWT jaulki ondoren aldatu den egiaztatzeko
userSchema.methods.changedPasswordAfter = function(JWTTimestamp) {
  if (this.passwordChangedAt) {
    const changedTimestamp = parseInt(this.passwordChangedAt.getTime() / 1000, 10);
    return JWTTimestamp < changedTimestamp;
  }
  return false;
};

const User = mongoose.model('User', userSchema);

module.exports = User;