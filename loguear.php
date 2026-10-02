<?php

$user = $_POST['usuario'];
$clave = $_POST['clave'];


if($user=="admin"&&$clave=="123"){
   
  header("location:index.php");
  

}else {
    echo "<h1>datos incorrectos</h1> <br> ";
    echo "<a href='login.php'>Volver</a>";
}


?>