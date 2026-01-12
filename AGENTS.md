# AGENTS.md - Coding Agent Guidelines

This file provides essential information for AI coding agents working on the Zabala Gailetak secure e-commerce platform.

---

## Project Overview

**Zabala Gailetak** is a cybersecurity-focused e-commerce platform with:
- **Backend API**: Node.js/Express with comprehensive security features
- **Web App**: React 18 with styled-components and Webpack
- **Mobile App**: React Native for iOS/Android
- **Infrastructure**: Docker-based with MongoDB, Redis, Nginx
- **Language**: Primarily JavaScript (ES2021+), some Basque language text in UI

---

## 🏗️ Project Structure

```
Zabala Gailetak/
├── src/
│   ├── api/               # Express.js backend API
│   │   ├── app.js         # Main application entry
│   │   ├── middleware/    # Auth, validation, security middleware
│   │   ├── models/        # Data models
│   │   └── config/        # Configuration files
│   ├── web/
│   │   └── app/           # React web application
│   │       ├── pages/     # React page components
│   │       ├── context/   # React Context (AuthContext)
│   │       ├── services/  # API client services
│   │       └── styles/    # Styled-components
│   └── mobile/            # React Native mobile app
│       ├── screens/       # Mobile screens
│       └── services/      # Mobile API services
├── tests/                 # Test files
│   ├── api.test.js        # API unit tests
│   ├── auth.test.js       # Authentication tests
│   └── e2e/               # End-to-end tests
├── scripts/               # Utility scripts (backups, etc.)
├── docker-compose.yml     # Docker orchestration
└── package.json           # Root package.json for API
```

---

## 🚀 Build, Lint, and Test Commands

### Backend API (from `Zabala Gailetak/`)

```bash
# Development
npm run dev                    # Start with auto-reload (nodemon)
npm start                      # Start production server

# Testing
npm test                       # Run all tests with Jest
npm run test:watch             # Run tests in watch mode
npm test -- --coverage         # Run tests with coverage report

# Run a single test file
npm test tests/api.test.js
npm test tests/auth.test.js

# Linting
npm run lint                   # Lint API code
npm run lint:fix               # Lint and auto-fix issues

# Security
npm run audit                  # Security audit
npm run audit:fix              # Fix security vulnerabilities
```

### Web App (from `Zabala Gailetak/src/web/app/`)

```bash
# Development
npm start                      # Start dev server with hot reload
npm run build                  # Build for production

# Linting
npm run lint                   # Lint web app code
npm run lint:fix               # Lint and auto-fix issues
```

### Mobile App (from `Zabala Gailetak/src/mobile/`)

```bash
# Development
npm start                      # Start Metro bundler
npm run android                # Run on Android emulator/device
npm run ios                    # Run on iOS simulator (macOS only)

# Testing
npm test                       # Run mobile tests

# Linting
npm run lint                   # Lint mobile code
npm run lint:fix               # Lint and auto-fix issues
```

### E2E Testing (from `Zabala Gailetak/`)

```bash
# Playwright E2E tests
npx playwright test                    # Run all E2E tests
npx playwright test --headed           # Run with browser visible
npx playwright test tests/e2e/web/auth.spec.js  # Run single test file
```

### Docker Operations (from project root)

```bash
docker-compose up -d           # Start all services
docker-compose down            # Stop all services
docker-compose logs -f api     # View API logs
docker-compose restart api     # Restart API service
docker-compose build --no-cache  # Rebuild containers
```

---

## 📋 Code Style Guidelines

### General Principles

- **Security First**: All code must follow OWASP security guidelines
- **No console in production**: Use proper logging (winston) for production
- **Input validation**: Always validate and sanitize user inputs
- **Error handling**: Use try-catch blocks and return meaningful error messages

### JavaScript Style (ESLint Configuration)

**Base Configuration**: Airbnb style guide + security plugin

```javascript
// ESLint extends
extends: ['airbnb-base', 'plugin:security/recommended']
```

### Imports

**Order**: External dependencies → Internal modules → Config/Constants

```javascript
// ✅ Good
const express = require('express');
const helmet = require('helmet');
const { authMiddleware } = require('./middleware/auth');
require('dotenv').config();

// ❌ Avoid mixing styles
import express from 'express';  // Don't mix require/import
const helmet = require('helmet');
```

**Web/Mobile**: Use ES6 imports

```javascript
// ✅ Good
import React, { useState } from 'react';
import styled from 'styled-components';
import { useAuth } from '../context/AuthContext';
```

### Formatting

- **Indentation**: 2 spaces (no tabs)
- **Semicolons**: Not strictly enforced, but be consistent
- **Line length**: Aim for 80-100 characters
- **Trailing commas**: Optional (turned off in eslint)
- **Quotes**: Single quotes for strings

### Naming Conventions

```javascript
// Variables and functions: camelCase
const userToken = 'abc123';
const getUserData = () => {};

// Constants: UPPER_SNAKE_CASE
const API_BASE_URL = 'http://localhost:3000';
const MAX_RETRY_ATTEMPTS = 3;

// React Components: PascalCase
const LoginPage = () => {};
const UserProfile = () => {};

// Files: Match export style
// - api.js (utility/service)
// - Login.js (React component)
// - authMiddleware.js (middleware)
```

### Types and Validation

- Use `express-validator` for API input validation
- Check parameter types explicitly when needed
- Validate environment variables on startup

```javascript
// ✅ Good - Input validation
app.post('/api/auth/register', [
  body('username').trim().isLength({ min: 3, max: 30 }),
  body('email').isEmail().normalizeEmail(),
  body('password').isLength({ min: 8 })
], (req, res) => {
  const errors = validationResult(req);
  if (!errors.isEmpty()) {
    return res.status(400).json({ errors: errors.array() });
  }
  // Process request
});
```

### Error Handling

**API Responses**: Use consistent error format

```javascript
// ✅ Good
try {
  // Operation
  res.json({ message: 'Success', data });
} catch (error) {
  console.error('Error context:', error);
  res.status(500).json({ 
    error: process.env.NODE_ENV === 'production' 
      ? 'Generic error message' 
      : error.message 
  });
}
```

**Client-side**: Use try-catch with user-friendly messages

```javascript
// ✅ Good
try {
  const data = await apiClient.post('/endpoint', payload);
  return data;
} catch (error) {
  throw new Error(error.response?.data?.error || 'User-friendly fallback');
}
```

### Security Practices

1. **Always sanitize inputs**: Use DOMPurify for client-side, mongo-sanitize for API
2. **Never expose secrets**: Use environment variables for sensitive data
3. **Rate limiting**: Already configured; respect existing patterns
4. **Authentication**: Use JWT tokens with proper expiration
5. **MFA support**: Implement where user authentication is involved
6. **HTTPS only**: In production environments
7. **Content Security Policy**: Respect helmet configuration

```javascript
// ✅ Good - Input sanitization
const sanitizeInput = (data) => {
  if (typeof data === 'string') {
    return DOMPurify.sanitize(data.trim());
  }
  // Handle objects recursively
  return data;
};
```

---

## 🧪 Testing Guidelines

### Test File Naming

- Unit tests: `*.test.js`
- E2E tests: `*.spec.js`
- Location: `/tests/` directory

### Test Structure

```javascript
describe('API Endpoints', () => {
  describe('POST /api/auth/login', () => {
    it('should login with valid credentials', async () => {
      const response = await request(app)
        .post('/api/auth/login')
        .send({ username: 'test', password: 'Test123!' });
      
      expect(response.status).toBe(200);
      expect(response.body).toHaveProperty('token');
    });
  });
});
```

### Coverage Requirements

- Aim for 70%+ code coverage
- All new API endpoints must have tests
- Security-critical functions require comprehensive tests

---

## 🔧 Common Patterns

### API Endpoint Pattern

```javascript
app.post('/api/resource', [
  // Validation middleware
  body('field').isLength({ min: 1 })
], (req, res) => {
  const errors = validationResult(req);
  if (!errors.isEmpty()) {
    return res.status(400).json({ errors: errors.array() });
  }
  // Handle request
});
```

### React Component Pattern

```javascript
import React, { useState } from 'react';
import styled from 'styled-components';

const Container = styled.div`
  /* styles */
`;

const ComponentName = () => {
  const [state, setState] = useState(initialValue);
  
  return <Container>{/* JSX */}</Container>;
};

export default ComponentName;
```

---

## 📝 Environment Variables

Key environment variables (see `.env.example`):

- `NODE_ENV`: development | production
- `PORT`: API port (default: 3000)
- `JWT_SECRET`: Secret for JWT signing
- `MONGODB_URI`: MongoDB connection string
- `REDIS_HOST`: Redis host
- `ALLOWED_ORIGINS`: CORS allowed origins

---

## 🚨 Important Notes

1. **Language**: UI text is in Basque (Euskara); keep existing language patterns
2. **Security**: This is a security-focused project; always prioritize security
3. **Docker**: Services run in containers; test with docker-compose
4. **No TypeScript**: Project uses JavaScript; don't introduce TS without discussion
5. **Commits**: Follow conventional commit format (feat:, fix:, docs:, etc.)

---

**Version**: 1.0  
**Last Updated**: 2026-01-12  
**For**: AI Coding Agents working on Zabala Gailetak
