<?php

require ('functions.php');

// require('router.php');


// Connect to our MYSQL database.
$dsn = 'mysql:host=localhost;port=3306;dbname=myapp;user=sanju;password=7702;charset=utf8mb4';
$pdo = new PDO($dsn);


// for passing the SQL commands, use `prepare` and execute the variable
$statement = $pdo->prepare("select * from posts");
$statement->execute();

// Fetching the command details after you query. 
$posts =$statement->fetchAll(PDO::FETCH_ASSOC);

// dump and die
// dd($posts);


foreach ($posts as $post){
    echo "<li>" . $post['title'] . "</li>";
}


// // CLASS
// class Person{
//     public $name;
//     public $age;

//     public function breathe(){
//         echo $this->name . " is breathing!";
//     }
// }


// $person = new Person();

// $person->name= 'sai';
// $person->age= '24';

// // dd($person->age);

// $person->breathe();
