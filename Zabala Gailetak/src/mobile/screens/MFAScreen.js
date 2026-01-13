import React, { useState } from 'react';
import { View, Text, TextInput, TouchableOpacity, StyleSheet, Alert, ActivityIndicator } from 'react-native';
import { verifyMFA } from '../services/authService';

const MFAScreen = ({ route, navigation }) => {
  const [token, setToken] = useState('');
  const [loading, setLoading] = useState(false);
  const { userId } = route.params;

  const handleVerifyMFA = async () => {
    if (!token || token.length !== 6) {
      Alert.alert('Errorea', '6 digituko MFA kodea sartu behar duzu');
      return;
    }

    setLoading(true);
    try {
      const response = await verifyMFA(token);
      Alert.alert('Arrakasta', 'MFA balidazioa arrakastatsua', [
        {
          text: 'OK',
          onPress: () => navigation.replace('Products', { token: response.token, userId })
        }
      ]);
    } catch (error) {
      Alert.alert('Errorea', error.message || 'MFA balidazioa errorea');
    } finally {
      setLoading(false);
    }
  };

  return (
    <View style={styles.container}>
      <Text style={styles.title}>MFA Balidazioa</Text>
      <Text style={styles.subtitle}>Autentikatzaile aplikazioko kodea sartu</Text>

      <TextInput
        style={styles.input}
        placeholder="000000"
        value={token}
        onChangeText={setToken}
        keyboardType="number-pad"
        maxLength={6}
        textAlign="center"
        autoFocus
      />

      <TouchableOpacity
        style={[styles.button, loading && styles.buttonDisabled]}
        onPress={handleVerifyMFA}
        disabled={loading}
      >
        {loading ? (
          <ActivityIndicator color="#fff" />
        ) : (
          <Text style={styles.buttonText}>Balidatu</Text>
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
    fontSize: 24,
    fontWeight: 'bold',
    letterSpacing: 8,
    marginBottom: 20,
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
    fontSize: 28,
    fontWeight: 'bold',
    marginBottom: 10,
    textAlign: 'center',
  },
});

export default MFAScreen;
