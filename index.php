<?php

use App\Videostore\Genre;

include 'vendor/autoload.php';
$dbConfig = require_once './config/database.php';
try {
        $db_conncetion = new PDO("mysql:host={$dbConfig['host']};dbname={$dbConfig['database']}", $dbConfig['username'], $dbConfig['password'], [PDO::ATTR_PERSISTENT => true,]);

        
}
catch (\Throwable $th) {
        echo "Error while connecting to database\n";
        return;
}

// obican query

$result = $db_conncetion->query('SELECT * FROM zanr');
$result->setFetchMode(PDO::FETCH_CLASS, Genre::class);

foreach ($result as $genre) {
    var_dump($genre);
}

// // prepared statement
$id = 100;
$naziv = 'Triler';

$statement = $db_conncetion->prepare(
    "INSERT INTO zanr (ID_Zanr, Naziv) VALUES(:id, :naziv)"
);
$statement->bindValue(':id', 200);
$statement->bindParam(':naziv', $naziv);

if (!$statement->execute()){
    echo "Error while executing statement\n";
}

$fetchGenre = $db_conncetion->prepare("SELECT * FROM zanr WHERE Naziv = ?");
$fetchGenre->setFetchMode(PDO::FETCH_CLASS, Genre::class);

try {
    if (!$fetchGenre->execute([$_GET['naziv']])){
        echo "Error while executing statement\n";
    }
    
    var_dump($fetchGenre->fetchAll());
} catch (\Throwable $th) {
    var_dump($th);
}


// // transakcije
try {
    $db_conncetion->beginTransaction();
    $db_conncetion->query("INSERT INTO zanr (Naziv) VALUES('Triler')");
    $db_conncetion->commit();
} catch (\Throwable $th) {
    $db_conncetion->rollback();
}

// procedure
$result = $db_conncetion->query('CALL dohvatiClanove()');

foreach ($result as $member) {
    var_dump($member);
}