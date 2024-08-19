
<?php
$host = 'localhost';  
$dbname = 'nous_db'; 
$username = 'root'; 
$password = ''; 

try {
    $conn = new mysqli($host, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        throw new Exception("Error al conectar a la base de datos: " . $conn->connect_error);
    }

    $conn->set_charset("utf8mb4");

} catch (Exception $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}
?>

