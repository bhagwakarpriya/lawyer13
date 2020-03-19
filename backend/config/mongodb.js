const CONFIG = require('./config');
const mongoose = require('mongoose');

mongoose.Promise = global.Promise;
mongoose.set('useCreateIndex', true);
mongoose.connect('mongodb://'+CONFIG.db_host+'/'+CONFIG.db_name, { useNewUrlParser: true, useUnifiedTopology:true }).then((connection) => {
    console.log('connected successfully');
}).catch((err) => {
    console.log('error connecting');
});

module.exports = mongoose