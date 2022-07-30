<?php
$servername = "localhost";
$database = "id18944564_andrea";
$username = "id18944564_anndreaca";
$password = "Alvarez-1010";

$conn = mysqli_connect($servername, $username, $password, $database);
$usuario=$_POST['usuario'];
$nombre=$_POST['nom'];
$apellido=$_POST['apellido'];
$numero1=$_POST['num1'];
$numero2=$_POST['num2'];
$direc=$_POST['direccion'];
$mail=$_POST['correo'];
$contra=$_POST['contra'];
$confirm=$_POST['confirmar'];

$buscarUsu="select COUNT(*) total from cuenta where usuario='$usuario'";
$result = mysqli_query($conn,$buscarUsu) or die('Consulta fallida: ' . mysqli_error($conn));

$fila = mysqli_fetch_assoc($result);
if ($fila['total']!=0){
      echo "usuario ya existe";
}else{

    $sql = "insert into cuenta(usuario, nombre, n_apellido, num1, num2, direccion, correo, contraseña) values('$usuario', '$nombre', '$apellido', '$numero1', '$numero2', '$direc', '$mail', '$contra')";
    if ($confirm == $contra) {
        if (mysqli_query($conn, $sql)){
        echo "New record created successfully";
        }else{
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
       
        echo "Contraseñas no coinciden";
    }
}
mysqli_close($conn);
?>