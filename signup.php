<?php
     
     $servername = "localhost";
     $username = "root"; 
     $password = "root"; 
     $dbname = "location"; 
     
     $conn = new mysqli($servername, $username, $password, $dbname);
    if (isset($_POST['signup'])){
        $NOM=$_POST['name'];
        $CIN=$_POST['cin'];
        $EMAIL=$_POST['email'];
        $PASSWORD=$_POST['psw'];

    }
    $conn ->query ("INSERT INTO CLIENT (NOM,CIN,EMAIL,PASSWORD)
          VALUES ('$NOM','$CIN','$EMAIL','$PASSWORD')");
          header('location:index.html');
?>