<?php


use core\Database;

$config = require base_path('config');
//dd($id);

$db = new Database($config['database']);
//dd($db);

$notes = $db->consult("SELECT * FROM posts WHERE  user_id = :user ORDER BY id DESC", ['user' => session_user_id])->findAll();

//dd($notes);

view('note/index', [
    'heading' => 'Your Notes',
    'notes' => $notes
]);

