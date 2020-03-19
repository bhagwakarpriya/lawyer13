const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const server = require('http').Server(app);
const cors = require('cors');
const helmet = require('helmet');
const morgan = require('morgan');
app.use(helmet());

// custom req
const CONFIG = require('./config/config');
const mongoose = require('./config/mongodb');
const error = require('./middleware/error');

// dev environment configurations
if(CONFIG.env === 'dev' || CONFIG.env === 'development') {
    app.use(morgan('tiny'));

    console.log('approved domains for development: ', CONFIG.cors_whitelist);
    console.log('development mode active....');
}

app.use(cors({origin: CONFIG.cors_whitelist}))

// register routes
const routes = require('./routes/index');

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

/**
 * routes and endpoints
 */
app.get('/', function(req, res, next) {
    return res.status(200).send({
        msg: 'this is not where you want to be.'
    })
})
app.use('/api', routes);

/**
 * catch error handler
 */
app.use(error)
server.listen(CONFIG.port, () => {
    console.log('listening on port: ', CONFIG.port);
});