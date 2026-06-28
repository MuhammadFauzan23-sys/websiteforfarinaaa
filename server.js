// server.js
const express = require('express');
const path = require('path');
const app = express();
const port = process.env.PORT || 3000;

// Menyajikan file static dari folder "public"
app.use(express.static(path.join(__dirname, 'public')));

// Route tes
app.get('/ping', (req, res) => res.send('Server FARINAAA aktif!'));

app.listen(port, () => {
  console.log(`🌸 FARINAAA Website berjalan di http://localhost:${port}`);
});