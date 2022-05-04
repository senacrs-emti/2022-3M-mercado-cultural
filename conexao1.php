<?php

$localhost = "localhost";
$user="root";
$passw="";
$banco="loja-tavares";  //nome do banco

$conecta = mysqli_connect($localhost,$user,$passw,$banco);
$sql = "SELECT * FROM  usuarios";

$resultado = mysqli_query($conecta,$sql);

echo "Existem ".mysqli_num_rows($resultado);

?>





