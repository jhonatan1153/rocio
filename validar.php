<?php
include "conexion.php";


$nom = $_POST["nombre"];
$ape = $_POST["apellido"];
$tel = $_POST["telefono"];
$select = $_POST["select"];
$motivo = $_POST["descripcion"];


$sql ="INSERT INTO usuarios(nomusuario) VALUES('hola')"; 

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header('Location: index.php?p=contacto');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);



}

    ?>