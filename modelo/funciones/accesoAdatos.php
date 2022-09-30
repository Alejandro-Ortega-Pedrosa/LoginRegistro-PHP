<?php
    function buscaUsuario(String $ruta, String $usuario, String $password){
        
        $usuarios=usuarios($ruta);

        for($i=0;$i<count($usuarios);$i++){
            if($usuarios[$i][0]==$usuario && $usuarios[$i][1]==$password && $usuarios[$i][2]=="1"){
                $valor=1;
            }
            elseif ($usuarios[$i][0]==$usuario && $usuarios[$i][1]==$password && $usuarios[$i][2]=="2"){
                $valor=2;
            }
            else{
                $valor=0;
            }

            //COMPRUEBA QUE EL USUARIO YA EXISTE
            if($valor>0){
                break;
            }
        } 
    
        return $valor;
    }

    function usuarios($ruta){
        
        $texto=file_get_contents($ruta);

        $usuarios = explode("\n", $texto);
        
        for($i=0;$i<count($usuarios);$i++){
            $arrayNuevo=explode(";",$usuarios[$i]);
            $usuarios[$i]=$arrayNuevo;
        
        }

        return $usuarios;
    }

    function nuevoUsuario($usuario, $password, $rol, $ruta){

        $cadena=file_get_contents($ruta);
        $cadena=$cadena."\n".$usuario.";".$password.";".$rol;
        file_put_contents($ruta,$cadena);
    }

?>