<?php
/* Host name of the MySQL server */
$host = '0.tcp.ap.ngrok.io:12347';
/* MySQL account username */
$user = 'root';
/* MySQL account password */
$passwd = '';
/* The schema you want to use */
$schema = 'bodaping';
/* The PDO object */
$pdo = NULL;
/* Connection string, or "data source name" */
$dsn = 'mysql:host=' . $host . ';dbname=' . $schema;
/* Connection inside a try/catch block */
try
{  
   /* PDO object creation */
   $pdo = new PDO($dsn, $user,  $passwd);
   
   /* Enable exceptions on errors */
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
   /* If there is an error an exception is thrown */
   echo 'Connection failed<br>';
   echo 'Error number: ' . $e->getCode() . '<br>';
   echo 'Error message: ' . $e->getMessage() . '<br>';
   die();
}
echo 'Successfully connected!<br>';