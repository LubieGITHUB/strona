const express = require('express');
const fs = require('fs');
const app = express();
const port = 3000;

app.use(express.json());

app.post('/zapisz-ip', (req, res) => {
    const ip = req.body.ip;
    const date = new Date().toISOString();
    fs.appendFile('numeryip.txt', `Adres IP: ${ip} - Data: ${date}\n`, (err) => {
        if (err) {
            return res.status(500).send('Błąd zapisu do pliku.');
        }
        res.send('Adres IP zapisany.');
    });
});

app.listen(port, () => {
    console.log(`Serwer działa na http://localhost:${port}`);
});
