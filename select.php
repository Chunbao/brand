
<?php
   // use 127.0.0.1 for tcp socket, localhost for unix socket
   #$dbhost = 'localhost';
   $dbhost = '127.0.0.1';
   $dbuser = 'tester';
   $dbpass = 'focus1';
   $con = mysqli_connect($dbhost, $dbuser, $dbpass, 'testdb');
   if (mysqli_connect_errno()) {
     die( "Failed to connect to MySQL: " . mysqli_connect_error());
   }
   echo 'Connected successfully<br>';
   
   $result = mysqli_query($con,"SELECT * FROM blog");

   while($row = mysqli_fetch_array($result)) {
     echo $row['PersonId'] . " " . $row['LastName'] . " " . $row['FirstName'] . " " . $row['Header'] . " " . $row['Content'];
     echo "<br>";
   }

   mysqli_close($con); 
?>
