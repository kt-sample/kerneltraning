<?php
   $username = $_POST['username'];
   $password = $_POST['password']; 
   if ($username == "admin" && $password == "password"){
     echo "Login SuccessFull";
   } else {
      echo "Login UnSuccessFull";
   }
?>
<html>
<head>
<title>Login Page</title>
</head>
   <body bgcolor = "#FFFFFF">
      <form action = "" method = "post">
      <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
      <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
      <input type = "submit" value = " Submit "/><br />
      </form>
   </body>
</html>
