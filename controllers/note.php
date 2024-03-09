<?php

$heading = 'Note';

$config = require 'config.php';
//dd($id);

$db = new Database($config['database']);

$id = $_GET['id'] ?? 1;
//dd($db);

$notes = $db->consult("SELECT * FROM posts WHERE id = :id", ['id' => $id])->fetchAll();

//dd($notes);

require 'views/notes.view.php';