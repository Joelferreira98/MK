<?php 


class ConDb{
    
    private $host= "127.0.0.1";
     private $dbname= "database";
     private $user = "user";
     private $pass = "";
     private $dbh;
    
     function conectar(){
       $dbh = mysqli_connect("localhost","root","","mk");
       return $dbh;
     }
    
}

?>