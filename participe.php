<?php

	header ('Content-type: text/html; charset=utf-8');

   $servername = "clementsjwdata.mysql.db";
   $username = "clementsjwdata";
   $password = file_get_contents("../password.txt");
     
   // Create connection
   $conn = new PDO("mysql:host=$servername;dbname=clementsjwdata;charset=utf8", $username, $password);
   // Check connection
   if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   }
   
   $sql = "SELECT * FROM participants";
   $result = $conn->query($sql);
   $row= $result->fetch(PDO ::FETCH_ASSOC);
   
   $temprow = $row['number'];
   $temprow+=1;
   
   $sql2 = "INSERT INTO participants
   VALUE($temprow)";
   $conn->close();
?>