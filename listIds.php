<?php
  $a = array();
  $dbhost = '127.0.0.1';
  $dbuser = 'tester';
  $dbpass = 'focus1';
  $con = mysqli_connect($dbhost, $dbuser, $dbpass, 'testdb');
  if (mysqli_connect_errno()) {
    die( "Failed to connect to MySQL: " . mysqli_connect_error());
  }
  $result = mysqli_query($con,"SELECT PersonId FROM blog");

  while($row = mysqli_fetch_array($result)) {
    $a[] = $row['PersonId'];
  }

  mysqli_close($con); 

  // get the q parameter from URL
  $q=$_REQUEST["q"]; $hint="";

  // lookup all hints from array if $q is different from "" 
  if ($q !== "") {
    $q=strtolower($q); $len=strlen($q);
    foreach($a as $name) {
      if (stristr($q, substr($name,0,$len))) {
        if ($hint==="") {
          $hint=$name;
        } else {
          $hint .= ", $name";
        }
      }
    }
  }

// Output "no suggestion" if no hint were found
// or output the correct values 
echo $hint==="" ? "no suggestion" : $hint;
?>