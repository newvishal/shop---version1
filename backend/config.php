<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
$localhost = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$dbname = "shop"; 

// $method = $_SERVER['REQUEST_METHOD'];
// $request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
// $input = json_decode(file_get_contents('php://input'),true);

// Create connection
$conn = new mysqli($localhost, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    return $conn;
}
?>