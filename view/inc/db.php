<?php

/* Se code me permet de  nommer ma base de donnée et de s'y connecter */
class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "bootstrapshop";
    private static $dbUser = "root";
    private static $dbUserPassword = "";
    
    private static $connection = null;


    public static function connect()
    {  
            try
            {
                self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,self::$dbUser,self::$dbUserPassword);  
            }
            catch(PDOException $e)
            {
                die($e->getMessage());  
            } 
            return self::$connection;   
    }

    public static function disconnect()
    {
           self::$connection = null;
    }     
}
Database::connect();

// try {
//     $dbh = new PDO('mysql:host=localhost;dbname=bootstrapshop', $user, $pass);
//     foreach($dbh->query('SELECT * from FOO') as $row) {
//         print_r($row);
//     }
    
// } catch (PDOException $e) {
//     print "Erreur !: " . $e->getMessage() . "<br/>";
//     die();
// }




?>