<?php

$heading = 'Create a note';

$config = require 'config.php';
//dd($id);

$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];
    switch ($_POST['body']) {
        case empty($_POST['body']):
            $errors['body'] = 'The note is required';
            break;
        case strlen($_POST['body']) < 5:
            $errors['body'] = 'The note must be at least 5 characters';
            break;
        case strlen($_POST['body']) > 255:
            $errors['body'] = 'The note must be less than 255 characters';
            break;
    }

    if (empty($errors)) {
        $db->consult("INSERT INTO posts (body, user_id) VALUES (:body, :user)", [
            'body' => $_POST['body'],
            'user' => session_user_id
        ]);
    }


}
require 'views/note-create.view.php';
