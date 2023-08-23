

<?php
/* Host name of the MySQL server */
$host = 'localhost';
/* MySQL account username */
$user = 'root';
/* MySQL account password */
$passwd = '';
/* The schema you want to use */
$schema = 'bodaping';
/* Connection with MySQLi, OOP-style */
$conn = new mysqli($host, $user, $passwd, $schema);
/* Check if the connection succeeded */
if (!is_null($conn->connect_error))
{
   echo 'Connection failed<br>';
   echo 'Error number: ' . $conn->connect_errno . '<br>';
   echo 'Error message: ' . $conn->connect_error . '<br>';
   die();
}
