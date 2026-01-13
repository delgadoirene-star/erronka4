import React, { useState } from 'react';
import { View, Text, TextInput, TouchableOpacity, StyleSheet, Alert, ActivityIndicator } from 'react-native';
import { createOrder } from '../services/authService';

const OrderScreen = ({ route, navigation }) => {
  const [quantity, setQuantity] = useState('1');
  const [customerName, setCustomerName] = useState('');
  const [customerEmail, setCustomerEmail] = useState('');
  const [loading, setLoading] = useState(false);
  const { product } = route.params;

  const handleCreateOrder = async () => {
    if (!customerName || !customerEmail) {
      Alert.alert('Errorea', 'Izena eta emaila behar dira');
      return;
    }

    setLoading(true);
    try {
      const orderData = {
        productId: product.id,
        quantity: parseInt(quantity, 10),
        customerName,
        customerEmail
      };

      const response = await createOrder(orderData);
      Alert.alert('Arrakasta', `Eskaera #${response.orderId} ondo jaso da`, [
        {
          text: 'OK',
          onPress: () => navigation.goBack()
        }
      ]);
    } catch (error) {
      Alert.alert('Errorea', error.response?.data?.errors?.[0]?.msg || error.message);
    } finally {
      setLoading(false);
    }
  };

  return (
    <View style={styles.container}>
      <View style={styles.productSummary}>
        <Text style={styles.productName}>{product.name}</Text>
        <Text style={styles.productPrice}>€{product.price.toFixed(2)}</Text>
      </View>

      <Text style={styles.label}>Kantitatea:</Text>
      <TextInput
        style={styles.input}
        value={quantity}
        onChangeText={setQuantity}
        keyboardType="number-pad"
      />

      <Text style={styles.label}>Izena:</Text>
      <TextInput
        style={styles.input}
        value={customerName}
        onChangeText={setCustomerName}
        placeholder="Zure izena"
      />

      <Text style={styles.label}>Emaila:</Text>
      <TextInput
        style={styles.input}
        value={customerEmail}
        onChangeText={setCustomerEmail}
        placeholder="email@example.com"
        keyboardType="email-address"
        autoCapitalize="none"
      />

      <View style={styles.totalContainer}>
        <Text style={styles.totalLabel}>Total:</Text>
        <Text style={styles.totalValue}>€{(product.price * parseInt(quantity || 0, 10)).toFixed(2)}</Text>
      </View>

      <TouchableOpacity
        style={[styles.button, loading && styles.buttonDisabled]}
        onPress={handleCreateOrder}
        disabled={loading}
      >
        {loading ? (
          <ActivityIndicator color="#fff" />
        ) : (
          <Text style={styles.buttonText}>Eskaera Egin</Text>
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
    padding: 20,
  },
  input: {
    backgroundColor: '#fff',
    borderRadius: 8,
    fontSize: 16,
    marginBottom: 15,
    padding: 15,
  },
  label: {
    color: '#666',
    fontSize: 14,
    fontWeight: '600',
    marginBottom: 5,
  },
  productName: {
    color: '#333',
    flex: 1,
    fontSize: 18,
    fontWeight: 'bold',
  },
  productPrice: {
    color: '#333',
    fontSize: 20,
    fontWeight: 'bold',
  },
  productSummary: {
    alignItems: 'center',
    backgroundColor: '#fff',
    borderRadius: 10,
    flexDirection: 'row',
    justifyContent: 'space-between',
    marginBottom: 20,
    padding: 20,
  },
  totalContainer: {
    alignItems: 'center',
    backgroundColor: '#fff',
    borderRadius: 8,
    flexDirection: 'row',
    justifyContent: 'space-between',
    marginVertical: 20,
    padding: 15,
  },
  totalLabel: {
    color: '#333',
    fontSize: 18,
    fontWeight: 'bold',
  },
  totalValue: {
    color: '#333',
    fontSize: 24,
    fontWeight: 'bold',
  },
});

export default OrderScreen;
