<?php

//$config = require base_path('config');
//$db = new Database($config['database']);
use core\App;

$db = App::resolve('core\Database');

//dd($_POST);
$notes = $db->consult("SELECT * FROM posts WHERE  user_id = :user ORDER BY id DESC", [
    'user' => session_user_id
])->findAll();


auth($_POST['user_id'] == session_user_id);
//    dd($_POST);
$db->consult("DELETE FROM posts WHERE id = :id and user_id = :user_id", [
    'id' => $_POST['note_id'],
    'user_id' => $_POST['user_id']
]);
header("Location: /notes");
exit;
