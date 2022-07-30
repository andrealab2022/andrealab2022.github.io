<?php
$servername = "localhost";
$database = "id18944564_andrea";
$username = "id18944564_anndreaca";
$password = "Alvarez-1010";

$conn = mysqli_connect($servername, $username, $password, $database);

$usuario=$_POST['usuario'];
$contraseña=$_POST['contra'];

$buscarUsu="select COUNT(*) total from cuenta where usuario='$usuario'";
$result = mysqli_query($conn,$buscarUsu) or die('Consulta fallida: ' . mysqli_error($conn));

//realizar una consulta MySQL
$result = mysqli_query($conn,$buscarUsu) or die ('Consulta fallida: ' . mysqli_error($conn));

$fila = mysqli_fetch_assoc($result);

if ($fila['total']==0){
      echo "Usuario no existe";
}else{

    if (strcmp($fila['contraseña'], $contraseña)==0){
        header("Location: menu.html", TRUE, 301);
        exit();
             
    } else {
        echo "Datos incorrectos";
    }
}
mysqli_close($conn);
?>