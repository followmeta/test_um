<?php
// HTTP
define('HTTP_SERVER', 'http://followmeta.ru/');

// HTTPS
define('HTTPS_SERVER', 'http://followmeta.ru/');

// DIR
define('DIR_APPLICATION', '/home/users/j/j19587422/domains/followmeta.ru/catalog/');
define('DIR_SYSTEM', '/home/users/j/j19587422/domains/followmeta.ru/system/');
define('DIR_IMAGE', '/home/users/j/j19587422/domains/followmeta.ru/image/');
define('DIR_STORAGE', '/home/users/j/j19587422/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'j19587422_db');
define('DB_PASSWORD', 'testpassword');
define('DB_DATABASE', 'j19587422_opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');