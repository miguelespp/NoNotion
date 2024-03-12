<?php

$heading = 'Note';

$config = require 'config.php';
//dd($id);

$db = new Database($config['database']);

$id = $_GET['id'] ?? 1;
//dd($db);

$note = $db->consult("SELECT * FROM posts WHERE id = :id", ['id' => $id])->fetch();

//dd($notes);

require 'views/note.view.php';