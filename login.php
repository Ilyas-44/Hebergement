<?php

$servername = "localhost";
$username = "root"; 
$password = "root"; 
$dbname = "location"; 

$conn = new mysqli($servername, $username, $password, $dbname);

session_start();

if (isset($_POST['login'])){
    $EMAIL=$_POST['email'];
    $PASSWORD=$_POST['psw'];
    
    $ADMIN = admin;
    
    $sql = "select * from CLIENT where EMAIL='$EMAIL'  AND PASSWORD='$PASSWORD'";
    $sqlA = "select * from CLIENT where NOM='$ADMIN'  AND PASSWORD='$ADMIN'";
    $result = $conn->query($sql);
    $resultA = $conn->query($sqlA);
    
    if ($result->num_rows == 1) {
        while( $row=$result->fetch_assoc()) {    
            $_SESSION["name"]=$row['NOM'];
            $_SESSION["Id"] = $row['ID_CLIENT'];
    
            header("location:home.php");
    
        }
    }
    elseif (!$resultA->num_rows == 1) {
        header("location:admin.php");
    }

    else{
        echo"UserName or PassWord Incorrect!";
    }
    }

?>