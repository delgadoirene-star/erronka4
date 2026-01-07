const express = require('express');
const app = express();
const port = 3000;

// Segurtasun middleware-ak (Simulazioa)
// Errealitatean: helmet, cors, rate-limit erabili behar dira

app.use(express.json());

// Endpoint nagusia
app.get('/', (req, res) => {
  res.send('Zabala Gailetak API - Bertsioa 1.0');
});

// Produktuen zerrenda (Adibidea)
app.get('/api/products', (req, res) => {
  res.json([
    { id: 1, name: 'Gaileta Tradizionalak', price: 2.50 },
    { id: 2, name: 'Txokolatezko Gailetak', price: 3.00 },
    { id: 3, name: 'Zereal Gailetak', price: 2.80 }
  ]);
});

// Eskaerak jasotzeko endpoint-a (POST)
app.post('/api/orders', (req, res) => {
  // Hemen balidazioak eta segurtasun egiaztapenak egon behar dira
  console.log('Eskaera berria jaso da:', req.body);
  res.status(201).json({ message: 'Eskaera ondo jaso da', orderId: Math.floor(Math.random() * 1000) });
});

// Zerbitzaria martxan jarri
app.listen(port, () => {
  console.log(`Zabala Gailetak API entzuten: http://localhost:${port}`);
});
