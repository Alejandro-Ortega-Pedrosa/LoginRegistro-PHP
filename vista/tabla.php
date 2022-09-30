<?php

    require_once "./../modelo/funciones/accesoAdatos.php";

    $usuarios=usuarios("../modelo/Usuarios.txt");

    //TABLA
    echo "<table border=1px>";
    echo "<tr>";
    echo "  <th> USUARIO </th>";
    echo "  <th> CONTRASEÑA </th>";
    echo "  <th> ROL </th>";
    echo "</tr>";
    echo "<tr>";
    
    for($i=0;$i<count($usuarios);$i++){
        echo "<td> " . $usuarios[$i][0] . "</td>";
        echo "<td> " . $usuarios[$i][1] . "</td>";
        echo "<td> " . $usuarios[$i][2] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    echo "</br>";
    
    //TITULO
    echo "<h1>NUEVO USUARIO</h1>";

    //FORMULARIO
    echo '<form name="input" method="post" action="../control/procesaUsuario.php">';
    echo "<label>Usuario:</label>";
    echo '<input type="text" name="usuario" style="margin-bottom: 20px;">';
    echo "</br>";
    echo '<label>Contraseña:</label>';
    echo '<input type="password" name="password" style="margin-bottom: 20px;">';
    echo "</br>";
    echo '<label>Rol:</label>';
    echo '<input type="text" name="rol" style="margin-bottom: 20px;">';
    echo "</br>";
    echo '<input type="submit" id="entrar" value="Submit">';
    echo "</form>";   
?>