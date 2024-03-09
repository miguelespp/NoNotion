<?php

$heading = 'Notes';

$config = require 'config.php';
//dd($id);

$db = new Database($config['database']);
//dd($db);

$notes = $db->consult("SELECT * FROM posts WHERE user_id = 4")->fetchAll();

//dd($notes);

require 'views/notes.view.php';

