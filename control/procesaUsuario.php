<?php

    require_once "./../modelo/funciones/accesoAdatos.php";
    require_once "./../helpers/funciones.php";

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    $registrado=buscaUsuario("../modelo/Usuarios.txt",$usuario, $password);

    if(validaFormAdmin($usuario, $password, $rol)){

        if($registrado=="1" || $registrado=="2"){
            echo '<script>alert("El Usuario YA ESTÁ REGISTRADO")</script>';
        }
        else{
            nuevoUsuario($usuario, $password, $rol, "../modelo/Usuarios.txt");
        }
    }

    header('Location: '.'/Formulario/vista/tabla.php');
    
    
?>