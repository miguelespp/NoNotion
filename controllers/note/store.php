<?php

use core\Database;
use core\Validator;

$config = require base_path('config');
//dd($id);

$db = new Database($config['database']);

$errors = [];

auth($_POST['user_id'] == session_user_id);

if (!Validator::checkRegularString($_POST['body'], 5, 255)) {
    $errors['body'] = 'The note must be at least 5 characters and less than 255 characters';
}

if (!empty($errors)) {
    view('note/create', [
        'heading' => 'Make a note :)',
        'errors' => $errors ?? []
    ]);


//        dd($_SERVER['REQUEST_URI']);

}else {
    $db->consult("INSERT INTO posts (body, user_id) VALUES (:body, :user)", [
        'body' => $_POST['body'],
        'user' => $_POST['user_id']
    ]);
    header("Location: " . '/notes');
    exit;
}