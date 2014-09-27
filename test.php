<!--
http://www.w3schools.com/sql/sql_create_table.asp
-->

<html>
<head>
  <title>Connecting MySQL Server</title>
  
  <script>
    function showHint(str) {
      if (str.length==0) { 
        document.getElementById("txtHint").innerHTML="";
        return;
      }
      var xmlhttp=new XMLHttpRequest();
      xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
          //document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
          //document.getElementById("txtHint").style.border="1px solid #A5ACB2";
          document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
          document.getElementById("livesearch").style.border="1px solid #A5ACB2";
        }
      }
      xmlhttp.open("GET","listIds.php?q="+str,true);
      xmlhttp.send();
    }
  </script>
</head>

<body>
  <form action="insert.php" method="post">
    PersonId:  <input type="text" name="PersonId" onkeyup="showHint(this.value)">
    <div id="livesearch"></div>
    LastName:  <input type="text" name="LastName">
    FirstName: <input type="text" name="FirstName">
    Header:    <input type="text" name="Header">
    Content:   <input type="text" name="Content">
    <input type="submit">
  </form>
  <p>Suggestions(ajax): <span id="txtHint"></span></p>
  
  <input type="button" value="List blog" onclick="location='select.php'"/>
</body>
</html>

