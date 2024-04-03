<?php
const BASE_PATH = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;


require BASE_PATH . 'fn.php';

require base_path('Database');
require base_path('Response');

// temp user id in session
const session_user_id = 2;
require base_path('router');
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

