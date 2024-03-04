<?php

require('functions.php');
// require('router.php');
require 'Database.php';
require 'config.php';

// dd($posts);

$db = new Database($config); // instantiate the config to the class.

// $post = $db->query('select * from posts where id = 1')->fetch(PDO::FETCH_ASSOC);
//All
$posts = $db->query('select * from posts')->fetchAll();

dd($posts);
// dd($post['title']);
// dd($post[0]['title']);
