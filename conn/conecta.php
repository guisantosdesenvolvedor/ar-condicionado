<?php 
$host = "localhost";
$database = "db_produtos";
$user = "root";
$pass = "";
$charset = "utf8";
$port = "3306";


try {
    $conn = new mysqli($host, $user,$pass,$database,$port);
    mysqli_set_charset($conn, $charset);
    
} catch (\Throwable $th) {
    echo "Atenção Erro: ".$th;
}
?>
