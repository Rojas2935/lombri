<?php
$servidor="localhost";
$usuario="root";
$contraseña="";
$nom_base="viajes";
   $enlace=mysqli_connect($servidor,$usuario,$contraseña,$nom_base);
  if(!$enlace){
      echo 'no pudo conectarse ala base de datos';
  }
    $nombre=$_POST['telefono'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];
   $sql="INSERT INTO datos VALUES('$nombre','$apellidos','$correo','$mensaje')";
  $resultado=mysqli_query($enlace,$sql);
   ?>