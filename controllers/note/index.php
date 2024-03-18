<?php

$heading = 'Notes';

$config = require 'config.php';
//dd($id);

$db = new Database($config['database']);
//dd($db);

$notes = $db->consult("SELECT * FROM posts WHERE  user_id = :user", ['user' => session_user_id])->findAll();

//dd($notes);

require 'views/note/index.view.php';

