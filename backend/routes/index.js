const express = require('express');
const routes = express.Router();
const fs = require('fs');

// // routes directory
const routesDir = './routes/';

let allFiles = fs.readdirSync(routesDir);

allFiles.forEach(file => {
    if(file.indexOf('route') > -1) {
        let fileNameArray = file.split('.');        
        routes.use(`/${fileNameArray[0]}`, require(`./${fileNameArray[0]}.routes`));
    }
});

module.exports = routes; 