import axios from 'axios';
import DOMPurify from 'dompurify';

const API_BASE_URL = process.env.REACT_APP_API_URL || 'http://localhost:3000/api';

const apiClient = axios.create({
  baseURL: API_BASE_URL,
  timeout: 10000,
  headers: {
    'Content-Type': 'application/json',
    'X-Requested-With': 'XMLHttpRequest'
  }
});

// Eskaera interceptor-a: Tokena eta CSRF tokena gehitzeko
apiClient.interceptors.request.use((config) => {
  const token = localStorage.getItem('auth_token') || document.cookie.match(/auth_token=([^;]+)/)?.[1];
  if (token) {
    config.headers.Authorization = `Bearer ${token}`;
  }
  
  config.headers['X-CSRF-Token'] = getCsrfToken();
  
  return config;
}, (error) => {
  return Promise.reject(error);
});

// Erantzun interceptor-a: 401 erroreak kudeatzeko (saioa itxi)
apiClient.interceptors.response.use(
  (response) => response,
  async (error) => {
    if (error.response?.status === 401) {
      localStorage.removeItem('auth_token');
      document.cookie = 'auth_token=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
      window.location.href = '/login';
    }
    return Promise.reject(error);
  }
);

// CSRF tokena lortzeko funtzioa
const getCsrfToken = () => {
  const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
  return token || '';
};

// Sarrera sanitizatzeko funtzioa (XSS prebentzioa)
const sanitizeInput = (data) => {
  if (typeof data === 'string') {
    return DOMPurify.sanitize(data.trim());
  }
  if (typeof data === 'object' && data !== null) {
    const sanitized = {};
    Object.keys(data).forEach(key => {
      sanitized[key] = sanitizeInput(data[key]);
    });
    return sanitized;
  }
  return data;
};

// Saioa hasteko funtzioa
const login = async (username, password) => {
  try {
    const response = await apiClient.post('/auth/login', { 
      username: sanitizeInput(username), 
      password 
    });
    return response.data;
  } catch (error) {
    throw new Error(error.response?.data?.error || 'Saioa hasteko errorea');
  }
};

// MFA egiaztatzeko funtzioa
const verifyMFA = async (token) => {
  try {
    const response = await apiClient.post('/auth/mfa/verify', { 
      token: sanitizeInput(token) 
    });
    return response.data;
  } catch (error) {
    throw new Error(error.response?.data?.error || 'MFA balidazio errorea');
  }
};

// Produktuak lortzeko funtzioa
const getProducts = async () => {
  try {
    const response = await apiClient.get('/products');
    return response.data;
  } catch (error) {
    throw new Error(error.response?.data?.error || 'Produktuak lortzea errorea');
  }
};

// Eskaera sortzeko funtzioa
const createOrder = async (orderData) => {
  try {
    const sanitizedOrder = sanitizeInput(orderData);
    const response = await apiClient.post('/orders', sanitizedOrder);
    return response.data;
  } catch (error) {
    throw new Error(error.response?.data?.error || 'Eskaera sortzea errorea');
  }
};

// MFA konfiguratzeko funtzioa
const setupMFA = async () => {
  try {
    const response = await apiClient.post('/auth/mfa/setup');
    return response.data;
  } catch (error) {
    throw new Error(error.response?.data?.error || 'MFA konfigurazio errorea');
  }
};

// MFA desgaitzeko funtzioa
const disableMFA = async () => {
  try {
    const response = await apiClient.post('/auth/mfa/disable');
    return response.data;
  } catch (error) {
    throw new Error(error.response?.data?.error || 'MFA desgaitze errorea');
  }
};

// Autentifikazio tokena ezartzeko funtzioa
const setAuthToken = (token) => {
  if (token) {
    localStorage.setItem('auth_token', token);
  } else {
    localStorage.removeItem('auth_token');
  }
};

export {
  apiClient,
  login,
  verifyMFA,
  getProducts,
  createOrder,
  setupMFA,
  disableMFA,
  setAuthToken
};
