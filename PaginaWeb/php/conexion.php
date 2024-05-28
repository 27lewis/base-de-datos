<?php
//declaro la variables de conexion
$servidor = "localhost"; // el servidor que estamos usando 
$usuario ="root"; //usuario de la db
$contrasenha=""; // la contraseña del usuario que utiliaremos
$dbname="licor"; // nombre de la db 

// creando la conexion
$conexion =mysqli_connect($servidor,$usuario,$contrasenha,$dbname);
if(!$conexion){
    echo"fallo la conexion <br>";
    die("connection failed: ".mysqli_connect_error());
}
else{
    echo"conexion exitosa";
}
?>
