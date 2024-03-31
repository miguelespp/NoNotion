<?php

$heading = 'Create a note';

require base_path('Validator');
$config = require base_path('config');
//dd($id);

$db = new Database($config['database']);

$errors = [];
if($_SERVER['REQUEST_METHOD'] === 'POST'){

//    $validate = new Validator();
//    switch ($_POST['body']) {
//        case empty($_POST['body']):
//            $errors['body'] = 'The note is required';
//            break;
//        case strlen($_POST['body']) < 5:
//            $errors['body'] = 'The note must be at least 5 characters';
//            break;
//        case strlen($_POST['body']) > 255:
//            $errors['body'] = 'The note must be less than 255 characters';
//            break;
//    }

    if (!Validator::checkRegularString($_POST['body'], 5, 255)) {
        $errors['body'] = 'The note must be at least 5 characters and less than 255 characters';
    }

    if (empty($errors)) {
        $db->consult("INSERT INTO posts (body, user_id) VALUES (:body, :user)", [
            'body' => $_POST['body'],
            'user' => session_user_id
        ]);
    }


}

view('note/create', [
    'heading' => 'Make a note :)',
    'errors' => $errors ?? []
]);
