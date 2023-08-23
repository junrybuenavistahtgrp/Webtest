<?php
  // project/private/db_credentials.php
  define("DB_SERVER", "0.tcp.ap.ngrok.io");
  define("DB_USER", "root");
  define("DB_PASS", "");
  define("DB_NAME", "bodaping");
  $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME,'10491');
?>