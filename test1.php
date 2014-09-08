<!DOCTYPE html>

<!--
http://www.w3schools.com/sql/sql_create_table.asp
-->

<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
<?php
   $dbhost = '127.0.0.1';
   $dbuser = 'tester';
   $dbpass = 'focus1';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'testdb');
   if (mysqli_connect_errno()) {
     die( "Failed to connect to MySQL: " . mysqli_connect_error());
   }
   
   echo 'Connected successfully';
   mysqli_close($conn); 
?>
</body>
</html>
