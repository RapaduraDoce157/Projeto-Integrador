<?php 
include "conexao.php";

try{
$data = $conn->query( 'SELECT * FROM Cliente');

foreach($data as $row) {
    print_r($row);
    echo '<br>';
   }
} catch (PDOException $e ) {
    echo 'ERRO: ' . $e->getMessage();
}
?>