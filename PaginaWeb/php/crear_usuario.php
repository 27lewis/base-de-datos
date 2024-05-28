<?php
include("conexion.php"); // sirve para llamar un archivo

// declarar las variables para recibir y guardar los datos enviados desde el formulario
$Username = $_POST["Username"];
$Nombre = $_POST["Nombre"];
$Apellidos = $_POST["Apellidos"];
$Email = $_POST["Email"];
$Contraseña = $_POST["Contraseña"];
$Edad = $_POST["Edad"];
$Descripcion = $_POST["Descripcion"];

$passwordhash = password_hash($Contraseña, PASSWORD_BCRYPT); // BCRYP es el algoritmo de encriptacion, devuelve una cadena de 60 caracteres

$consultaId = "SELECT Username FROM persona WHERE Username='$Username'";
$resultado = mysqli_query($conexion, $consultaId); // devuelve un objeto con el resultado, false si hay un error, true si se ejecuta
$consultaId = mysqli_fetch_array($resultado); // devuelve un array o null

if (!$consultaId) { // si la consulta está vacía, entonces significa que no existe el username, y creamos el nuevo usuario
    $sql = "INSERT INTO personas (Username, Nombre, Apellidos, Email, Contraseña, Edad, Descripcion) 
            VALUES ('$Username', '$Nombre', '$Apellidos', '$Email', '$passwordhash', '$Edad', '$Descripcion')";
    
    if (mysqli_query($conexion, $sql)) { // ejecutamos y verificamos si se guardaron los datos
        echo "Tu cuenta ha sido creada.";
        echo "<br><a href='../indx.html'>Iniciar sesión</a></div>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
} else {
    echo "El username ya existe.";
    echo "<a href='index.html'>Inténtalo de nuevo.</a></div>";
}

// cerrando la conexión
mysqli_close($conexion);
?>
