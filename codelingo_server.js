const express = require('express');
const axios = require('axios');
const app = express();
app.use(express.json());

app.post('/run-code', async (req, res) => {
    const { script, language, versionIndex } = req.body;

    try {
        const response = await axios.post('https://api.jdoodle.com/v1/execute', {
            clientId: '7020535108b6119bc7b2e57e7de75dde',
            clientSecret: '3c9dcbe700b40610615de7602bb1ac1e0d9c5a13899acb33b4e232bc944e19a7',
            script: script,
            language: language,
            versionIndex: versionIndex
        });

        // Send the result back to the frontend
        res.json(response.data);
    } catch (error) {
        res.status(500).json({ error: 'Execution failed' });
    }
});

app.listen(3000, () => {
    console.log('Server running on port 3000');
});