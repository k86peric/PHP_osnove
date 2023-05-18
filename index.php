<?php

include 'vendor/autoload.php';
$dbConfig = require_once './config/database.php';
use App\Videostore\Genre;

try {
        $db_connection = new mysqli(
                username: $dbConfig['username'],
                password: $dbConfig['password'],
                database: $dbConfig['database']);
} catch (\Throwable $th) {
        echo "Error while connecting to database\n";
        return;
}

$result = $db_connection->query('SELECT * FROM zanr');

while ($genre = $result->fetch_object(Genre::class)) {
        echo $genre->getName(), "\n";
}
