const mongoose = require('mongoose');
require('dotenv').config();

/**
 * Zabala Gailetak Datu-base Konfigurazioa
 * 
 * MongoDB konexio segurua inplementatzen du:
 * - Konexio multzoa (Connection pooling)
 * - Berriro konexio automatikoa
 * - Errore kudeaketa
 * - Konexio monitorizazioa
 * - Segurtasun jardunbide egokiak
 */

const MONGODB_URI = process.env.MONGODB_URI || 'mongodb://localhost:27017/zabala-gailetak';
const NODE_ENV = process.env.NODE_ENV || 'development';

// Konexio aukerak
const options = {
  // Konexio multzo ezarpenak
  maxPoolSize: parseInt(process.env.MONGODB_POOL_SIZE) || 10,
  minPoolSize: 2,
  
  // Denbora-muga ezarpenak
  serverSelectionTimeoutMS: 5000, // 5 segundo
  socketTimeoutMS: 45000, // 45 segundo
  
  // Berriro konexio automatikoa
  retryWrites: true,
  retryReads: true,
  
  // Aplikazio izena monitorizaziorako
  appName: 'zabala-gailetak-api',
  
  // Erabili URL parser berria
  useNewUrlParser: true,
  useUnifiedTopology: true
};

// Autentifikazioa gehitu kredentzialak ematen badira
if (process.env.MONGODB_USER && process.env.MONGODB_PASSWORD) {
  options.auth = {
    username: process.env.MONGODB_USER,
    password: process.env.MONGODB_PASSWORD
  };
  options.authSource = process.env.MONGODB_AUTH_SOURCE || 'admin';
}

// Arazketa modua gaitu garapenean
if (NODE_ENV === 'development') {
  mongoose.set('debug', true);
}

/**
 * MongoDB-ra konektatu
 */
const connectDatabase = async () => {
  try {
    console.log(`[Datu-basea] MongoDB-ra konektatzen...`);
    console.log(`[Datu-basea] Ingurunea: ${NODE_ENV}`);
    
    await mongoose.connect(MONGODB_URI, options);
    
    console.log(`[Datu-basea] ✓ MongoDB-ra arrakastaz konektatuta`);
    console.log(`[Datu-basea] Datu-basea: ${mongoose.connection.name}`);
    console.log(`[Datu-basea] Ostalaria: ${mongoose.connection.host}`);
    
    // Gertaera entzuleak konfiguratu
    setupEventListeners();
    
    return mongoose.connection;
  } catch (error) {
    console.error('[Datu-basea] ✗ MongoDB-ra konektatzeak huts egin du:', error.message);
    
    if (error.name === 'MongoServerError' && error.code === 18) {
      console.error('[Datu-basea] Autentifikazioak huts egin du. Mesedez, egiaztatu MONGODB_USER eta MONGODB_PASSWORD');
    }
    
    // Produkzioan, prozesua irten datu-basera konektatu ezin bada
    if (NODE_ENV === 'production') {
      console.error('[Datu-basea] Prozesua irteten datu-base konexio hutsegiteagatik');
      process.exit(1);
    }
    
    throw error;
  }
};

/**
 * MongoDB-tik deskonektatu
 */
const disconnectDatabase = async () => {
  try {
    await mongoose.disconnect();
    console.log('[Datu-basea] ✓ MongoDB-tik deskonektatuta');
  } catch (error) {
    console.error('[Datu-basea] ✗ Errorea MongoDB-tik deskonektatzean:', error.message);
    throw error;
  }
};

/**
 * Konexio monitorizaziorako gertaera entzuleak konfiguratu
 */
const setupEventListeners = () => {
  const db = mongoose.connection;
  
  db.on('error', (error) => {
    console.error('[Datu-basea] Konexio errorea:', error.message);
  });
  
  db.on('disconnected', () => {
    console.warn('[Datu-basea] MongoDB-tik deskonektatuta');
    
    // Berriro konektatzen saiatu garapenean
    if (NODE_ENV === 'development') {
      console.log('[Datu-basea] Berriro konektatzen saiatzen...');
    }
  });
  
  db.on('reconnected', () => {
    console.log('[Datu-basea] ✓ MongoDB-ra berriro konektatuta');
  });
  
  db.on('close', () => {
    console.log('[Datu-basea] Konexioa itxita');
  });
};

/**
 * Datu-base konexio osasuna egiaztatu
 */
const checkConnection = () => {
  const state = mongoose.connection.readyState;
  const states = {
    0: 'disconnected',
    1: 'connected',
    2: 'connecting',
    3: 'disconnecting'
  };
  
  return {
    state: states[state] || 'unknown',
    isConnected: state === 1,
    host: mongoose.connection.host,
    name: mongoose.connection.name
  };
};

/**
 * Datu-base estatistikak lortu
 */
const getDatabaseStats = async () => {
  try {
    if (mongoose.connection.readyState !== 1) {
      return { error: 'Ez dago datu-basera konektatuta' };
    }
    
    const admin = mongoose.connection.db.admin();
    const dbStats = await mongoose.connection.db.stats();
    
    return {
      database: mongoose.connection.name,
      collections: dbStats.collections,
      dataSize: (dbStats.dataSize / 1024 / 1024).toFixed(2) + ' MB',
      storageSize: (dbStats.storageSize / 1024 / 1024).toFixed(2) + ' MB',
      indexes: dbStats.indexes,
      indexSize: (dbStats.indexSize / 1024 / 1024).toFixed(2) + ' MB',
      documents: dbStats.objects
    };
  } catch (error) {
    console.error('[Datu-basea] Errorea estatistikak lortzean:', error.message);
    return { error: error.message };
  }
};

/**
 * Hasierako indizeak sortu eredu guztietarako
 */
const createIndexes = async () => {
  try {
    console.log('[Datu-basea] Indizeak sortzen...');
    
    const models = mongoose.modelNames();
    for (const modelName of models) {
      const model = mongoose.model(modelName);
      await model.createIndexes();
      console.log(`[Datu-basea] ✓ Indizeak sortuta ${modelName}-rentzat`);
    }
    
    console.log('[Datu-basea] ✓ Indize guztiak arrakastaz sortu dira');
  } catch (error) {
    console.error('[Datu-basea] ✗ Errorea indizeak sortzean:', error.message);
    throw error;
  }
};

/**
 * Datu-basea ezabatu (kontuz erabili - garapenerako soilik)
 */
const dropDatabase = async () => {
  if (NODE_ENV === 'production') {
    throw new Error('Ezin da datu-basea ezabatu produkzio ingurunean');
  }
  
  try {
    console.warn('[Datu-basea] ABISUA: Datu-basea ezabatzen...');
    await mongoose.connection.dropDatabase();
    console.log('[Datu-basea] ✓ Datu-basea ezabatuta');
  } catch (error) {
    console.error('[Datu-basea] ✗ Errorea datu-basea ezabatzean:', error.message);
    throw error;
  }
};

/**
 * Itzaltze dotorea kudeatzailea
 */
const gracefulShutdown = async (signal) => {
  console.log(`[Datu-basea] ${signal} jasota. Datu-base konexioa ixten...`);
  
  try {
    await disconnectDatabase();
    console.log('[Datu-basea] ✓ Datu-base konexioa dotoreki itxita');
    process.exit(0);
  } catch (error) {
    console.error('[Datu-basea] ✗ Errorea itzaltze dotorean:', error.message);
    process.exit(1);
  }
};

// Prozesu amaiera seinaleak kudeatu
process.on('SIGINT', () => gracefulShutdown('SIGINT'));
process.on('SIGTERM', () => gracefulShutdown('SIGTERM'));

// Kudeatu gabeko salbuespenak kudeatu
process.on('uncaughtException', (error) => {
  console.error('[Datu-basea] Kudeatu gabeko salbuespena:', error);
  gracefulShutdown('UNCAUGHT_EXCEPTION');
});

// Kudeatu gabeko promesa errefusak kudeatu
process.on('unhandledRejection', (reason, promise) => {
  console.error('[Datu-basea] Kudeatu gabeko errefusa hemen:', promise, 'arrazoia:', reason);
  gracefulShutdown('UNHANDLED_REJECTION');
});

module.exports = {
  connectDatabase,
  disconnectDatabase,
  checkConnection,
  getDatabaseStats,
  createIndexes,
  dropDatabase,
  mongoose
};