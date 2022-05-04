<?php


$localhost = "localhost";
$user="root";
$passw="";
$banco="loja-tavares";  //nome do banco

$conn = new PDO ("mysql:dbname=".$banco."; host=".$localhost,$user,$passw);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$result = $conn->query("SELECT*FROM usuarios");

foreach($result as $row) {
    echo '<pre>';
    print_r($row['nome'].' '.$row['email']);
    echo '</pre>';
}
?>