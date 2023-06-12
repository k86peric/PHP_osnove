<?php

use Core\Application;

define('ROOT', realpath(__DIR__ . '/../'));
define('CONFIG', ROOT . '/config');
define('VIEW', ROOT . '/src/View/');

require ROOT . '/vendor/autoload.php';
require CONFIG . '/routes.php';

$dbConfig = require CONFIG . '/database.php';

define('DB_DSN', "mysql:host={$dbConfig['host']};dbname={$dbConfig['database']}");
define('DB_USERNAME', $dbConfig['username']);
define('DB_PASSWORD', $dbConfig['password']);

(new Application())->run();