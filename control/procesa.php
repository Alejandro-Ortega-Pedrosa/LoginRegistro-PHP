<?php

    require_once "./../modelo/funciones/accesoAdatos.php";
    require_once "./../helpers/funciones.php";

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    if(validaForm($usuario, $password)){

        if(buscaUsuario("../modelo/Usuarios.txt", $usuario, $password)==1){
            header('Location: '.'/Formulario/vista/tabla.php');
        }
        elseif (buscaUsuario("../modelo/Usuarios.txt", $usuario, $password)==2){
            echo "<h1>Bienvenido $usuario</h1>";
        }
        else{
            header('Location: '.'/Formulario/vista/formulario.html');
        }

    }else{
        header('Location: '.'/Formulario/vista/formulario.html');
    }
    
    
?>