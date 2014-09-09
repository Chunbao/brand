
<?php
   // use 127.0.0.1 for tcp socket, localhost for unix socket
   $dbhost = 'localhost';
   $dbuser = 'tester';
   $dbpass = 'focus1';
   $con = mysqli_connect($dbhost, $dbuser, $dbpass, 'testdb');
   if (mysqli_connect_errno()) {
     die( "Failed to connect to MySQL: " . mysqli_connect_error());
   }
   echo 'Connected successfully';

   $PersonId= mysqli_real_escape_string($con, $_POST['PersonId']);
   $LastName = mysqli_real_escape_string($con, $_POST['LastName']);
   $FirstName = mysqli_real_escape_string($con, $_POST['FirstName']);
   $Header= mysqli_real_escape_string($con, $_POST['Header']);
   $Content = mysqli_real_escape_string($con, $_POST['Content']);

   #$sql="INSERT INTO Persons (FirstName, LastName, Age) VALUES ('$firstname', '$lastname', '$age')";
   $sql="INSERT INTO blog (PersonId, LastName, FirstName, Header, Content) VALUES ('$PersonId','$LastNmae','$FirstName','$Header','$Content')";

   if (!mysqli_query($con,$sql)) {
     die('Error: ' . mysqli_error($con));
   }
   echo "1 record added";

   mysqli_close($con); 
?>
