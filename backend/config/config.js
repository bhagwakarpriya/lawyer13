require('dotenv').config();

// create a global CONFIG object that can be throughout the application
let CONFIG = {};

CONFIG.env = process.env.ENV || 'dev';
CONFIG.port = process.env.PORT || '3000';

CONFIG.app_id = process.env.APP_ID;
CONFIG.app_secret = process.env.APP_SECRET;

CONFIG.db_driver = process.env.DB_DRIVER || 'mongo';
CONFIG.db_host = process.env.DB_HOST || 'localhost';
CONFIG.db_port = process.env.DB_PORT || '27017';
CONFIG.db_name = process.env.DB_NAME || 'default'
CONFIG.db_user = process.env.DB_USER || 'root';
CONFIG.db_password = process.env.DB_PASSWORD || '';

CONFIG.jwt_encryption = process.env.JWT_ENCRYPTION;
CONFIG.jwt_expiration = process.env.JWT_EXPIRATION;

CONFIG.api_ver = process.env.API_VER;

CONFIG.cors_whitelist = ['http://localhost:'+CONFIG.port]

module.exports = CONFIG;