const express = require('express');
const bodyParser = require('body-parser');
const fetch = global.fetch;
const cors = require('cors');

const app = express();
const PORT = 3000;

app.use(cors());
app.use(bodyParser.json());

app.post('/run', async (req, res) => {
    const { script, language, versionIndex, clientId, clientSecret } = req.body;

    const payload = {
        script,
        language,
        versionIndex,
        clientId,
        clientSecret
    };

    try {
        const response = await fetch('https://api.jdoodle.com/v1/execute', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(payload)
        });
        const data = await response.json();
        res.json(data);
    } catch (error) {
        res.status(500).json({ error: error.toString() });
    }
});

app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
