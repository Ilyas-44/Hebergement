<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();

    echo"
    <h1>welcome to your account mr  </h1>" .$_SESSION['name'] ;
    ?>
    <form action="">
    
   
    </form> 

    <?php 
    // $ID = $_SESSION["Id"];
    // INSERT INTO `RESERVATION`(`ID_RESERVATION`, `ID_CLIENT`, `ID_MAISON`, `DATE_DEBUT`, `DATE_FIN`, `METHODE_PAYMENT`) VALUES ('','$ID','','[value-4]','[value-5]','[value-6]')
    
    ?>
</body>
</html>