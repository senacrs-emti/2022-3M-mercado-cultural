<?php
$servername = "localhost";
$database = "mercadocultural";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$pesquisar = $_POST['pesquisar'];
$result_produtos = "SELECT * FROM produtos WHERE nome LIKE '%$pesquisar%' LIMIT 5";
$resultado_produtos = mysqli_query($conn, $result_produtos);

while($rows_produtos = mysqli_fetch_array($resultado_produtos)){
    echo "Nome dos produtos: ".$rows_produtos['nome']."<br>";
}

?>