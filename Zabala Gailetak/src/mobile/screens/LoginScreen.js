import React, { useState } from 'react';
import { View, Text, TextInput, TouchableOpacity, StyleSheet, Alert, ActivityIndicator } from 'react-native';
import { login } from '../services/authService';

const LoginScreen = ({ navigation }) => {
  const [username, setUsername] = useState('');
  const [password, setPassword] = useState('');
  const [loading, setLoading] = useState(false);

  const handleLogin = async () => {
    if (!username || !password) {
      Alert.alert('Errorea', 'Erabiltzailea eta pasahitza behar dira');
      return;
    }

    setLoading(true);
    try {
      const response = await login(username, password);

      if (response.requiresMFA) {
        navigation.navigate('MFA', { userId: response.userId });
      } else if (response.token) {
        navigation.replace('Products', { token: response.token, userId: response.userId });
      }
    } catch (error) {
      Alert.alert('Errorea', error.message || 'Saioa hasteko errorea');
    } finally {
      setLoading(false);
    }
  };

  return (
    <View style={styles.container}>
      <Text style={styles.title}>Zabala Gailetak</Text>
      <Text style={styles.subtitle}>Sartu zure kontuan</Text>

      <TextInput
        style={styles.input}
        placeholder="Erabiltzailea"
        value={username}
        onChangeText={setUsername}
        autoCapitalize="none"
        autoCorrect={false}
      />

      <TextInput
        style={styles.input}
        placeholder="Pasahitza"
        value={password}
        onChangeText={setPassword}
        secureTextEntry
      />

      <TouchableOpacity
        style={[styles.button, loading && styles.buttonDisabled]}
        onPress={handleLogin}
        disabled={loading}
      >
        {loading ? (
          <ActivityIndicator color="#fff" />
        ) : (
          <Text style={styles.buttonText}>Saioa Hasi</Text>
        )}
      </TouchableOpacity>
    </View>
  );
};

const styles = StyleSheet.create({
  button: {
    alignItems: 'center',
    backgroundColor: '#333',
    borderRadius: 8,
    padding: 15,
  },
  buttonDisabled: {
    backgroundColor: '#999',
  },
  buttonText: {
    color: '#fff',
    fontSize: 16,
    fontWeight: 'bold',
  },
  container: {
    backgroundColor: '#f4f4f4',
    flex: 1,
    justifyContent: 'center',
    padding: 20,
  },
  input: {
    backgroundColor: '#fff',
    borderRadius: 8,
    fontSize: 16,
    marginBottom: 15,
    padding: 15,
  },
  subtitle: {
    color: '#666',
    fontSize: 16,
    marginBottom: 30,
    textAlign: 'center',
  },
  title: {
    color: '#333',
    fontSize: 32,
    fontWeight: 'bold',
    marginBottom: 10,
    textAlign: 'center',
  },
});

export default LoginScreen;
