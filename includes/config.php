<?php 

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','carcloud');
// Establish database connection.
try //exception handle
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")); // run your code here
}
catch (PDOException $e)  //code to handle the exception
{
exit("Error: " . $e->getMessage());
}

// PHP Data Objects. PDO is a consistent way to access databases. PDO is a more like a data access layer which uses a unified API (Application Programming Interface.

?>

