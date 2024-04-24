<?php

use core\Route;

const BASE_PATH = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;


require BASE_PATH . 'core/fn.php';
//dd(BASE_PATH);

spl_autoload_register(function ($class) {
//    dd($class);
    require base_path($class );
});

//require base_path('Database');
//require base_path('Response');

// temp user id in session
const session_user_id = 3;
require base_path('core/router');

$Router = new Route();
//dd($Router->getRoutes());
//dd(__FILE__);
$Router();

//dd($router->getRoutes());
//$router->run();
//$config = require 'config.php';

// conection to database mysql - Ordinary

//$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=posting';
//
//try {
//    $pdo = new PDO($dsn, 'root', '');
////    echo "Conexión exitosa!";
//} catch (PDOException $e) {
//    die("No se pudo conectar con el servidor: " . $e->getMessage());
//}
//
//$statement = $pdo->prepare('SELECT * FROM posts');
//$statement->execute();
//
//
//
//$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
//
//foreach ($posts as $post) {
//    echo "<li>".$post['title'] . "</li>";
//}

// Conection to database mysql - Using POO
// go to Database.php


// recibimos valore de la url

//$id = $_GET['id'] ?? 1;
////dd($id);
//
//$db = new Database($config['database']);
//
//$bruh = $db->consult("SELECT * FROM posts WHERE id = :id",[':id' => $id])->fetch();

//dd($bruh);

