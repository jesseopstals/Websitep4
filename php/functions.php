<?php

class User {

    // Properties of what a user can have
    public $name;
    public $email;
    public $password;
    public $afdeling;
    public $project_naam;
    public $datum;
    public $aantal_uur;
  
    // constructor so i can spare some lines of code
    function __construct($name, $email, $password, $afdeling, $project_naam, $datum, $aantal_uur) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->afdeling = $afdeling;
        $this->project_naam = $project_naam;
        $this->datum = $datum;
        $this->aantal_uur = $aantal_uur;
    }
}

function db() {

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Database name
    $dbname = "UrenRegistratieSysteem";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection if not connected it will return a message
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // return the connection with all its attributes
    return $conn;
}

function storeData() {
    // use the connection in as an variable 
    $conn = db();
    
    // Hier maak ik een object van de class user en ik noem hem hier: $user
    $user = new User($name, $email, $password, $afdeling, $project_naam, $datum, $aantal_uur);

    $sql = "INSERT INTO `medewerker` (`naam`, `email`, `password`, `afdeling`, `project_naam`, `datum`, `aantal_uren`) 
    VALUES ($user->name , $user->email , $user->password , $user->afdeling , $user->project_naam , $user->datum , $user->aantal_uur)";
 
    // if the query to store is correct it will pass if not it will return an error to the user
    if ($conn->query($sql) != TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


function displayData() {
    $conn = db();

    $sql = "SELECT * FROM `medewerker`";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {

      // output data of each row of your database
      while($row = $result->fetch_assoc()) {

        // echo your items in here

      }
    }

    $conn->close();
}

?>