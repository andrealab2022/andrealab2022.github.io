<?php

//conectando a la base de datos
$servername = "localhost";
$database = "id18944564_andrea";
$username = "id18944564_anndreaca";
$password = "Alvarez-1010";

//create connection
$conn = mysqli_connect($servername, $username, $password, $database)
or die('No se pudo conectar: ' . mysqli_error($conn));

//capturar dato del formulario
$usuario=$_POST['user'];

//realizar una consulta MySQL
$query = "SELECT contraseña FROM cuenta WHERE usuario ='$usuario'";

$result = mysqli_query($conn,$query) or die ('Consulta fallida: ' . mysqli_error($conn));

?>

 <table>
   <thead>
    <tr>
        <th>CONTRASEÑA</th>
    </tr>
 </thead>
 <?php while ($row = mysqli_fetch_array($result)){
    echo "<td>". $row['contraseña']." </td>";
 } ?>

 </table>