<?php

use core\Database;

$heading = 'Note';

$config = require base_path('config');
//dd($id);

$db = new Database($config['database']);

$id = $_GET['id'] ?? 1;
//dd($db);


$note = $db->consult("SELECT * FROM posts WHERE user_id = :user and id = :id", ['user' => session_user_id, 'id' => $id])->findOrFail();
//dd($note);

//if(!$note){
//    abort(Response::HTTP_NOT_FOUND);
//}

//if ($note['user_id'] != session_user_id) {
//    abort(Response::HTTP_FORBIDDEN);
//}
auth($note['user_id'] === session_user_id);

//dd($notes);

view('note/show', [
    'heading' => 'Note',
    'note' => $note
]);