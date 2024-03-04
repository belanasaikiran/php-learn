<?php


// Connect to database and execute a query.
class Database
{
    public $connection;


    public function __construct($config, $username= 'sanju', $password='7702')
    {
        //old
        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
        
        // dd('mysql:' . http_build_query($config, '', ';')); //example.com?host=localhost&port=3306 -- replace the separator
        // Connect to our MYSQL database - better approach.
        $dsn = 'mysql:' . http_build_query($config, '', ';'); //example.com?host=localhost&port=3306 -- replace the separator
  

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query)
    {

        // for passing the SQL commands, use `prepare` and execute the variable
        $statement = $this->connection->prepare($query);
        $statement->execute();

        // Fetching the command details after you query. 
        // FetchAll - for lists
        // return $statement->fetchAll(PDO::FETCH_ASSOC);

        //one instance
        // return $statement->fetch(PDO::FETCH_ASSOC);
        return $statement;

    }
}


// dump and die
// dd($posts);


foreach ($posts as $post) {
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
