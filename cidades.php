<?php
  $con = mysql_connect( 'localhost', 'root', 'root' );
  mysql_select_db( 'cadastro', $con );
?>

<?php
    $sql = "SELECT cod_estados, sigla
        FROM estados
        ORDER BY sigla";
    $res = mysql_query( $sql );
    while ( $row = mysql_fetch_assoc( $res ) ) {
    echo '<option value="'.$row['cod_estados'].'">'.$row['sigla'].'</option>';
    }
?>
