require('dotenv').config();
const express = require('express');

const port = 9000;

const app = express();

app.listen(port, () => console.log(`Example app listening on port ${port}!`));