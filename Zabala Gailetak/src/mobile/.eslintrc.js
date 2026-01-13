module.exports = {
  parser: '@typescript-eslint/parser',
  extends: [
    'eslint:recommended',
    'plugin:@typescript-eslint/recommended',
    'plugin:react/recommended',
    'plugin:react-native/all',
    'plugin:security/recommended'
  ],
  plugins: [
    '@typescript-eslint',
    'react',
    'react-native',
    'security'
  ],
  rules: {
    'security/detect-object-injection': 'warn',
    'no-unused-vars': 'off',
    '@typescript-eslint/no-unused-vars': ['error'],
    'react/prop-types': 'off',
    'react-native/no-inline-styles': 'warn',
    'react-native/no-color-literals': 'off',
    'react-native/sort-styles': 'off',
    'no-use-before-define': 'off',
    'max-len': ['error', { code: 120 }],
    'arrow-body-style': 'off',
    radix: 'error'
  }
};
