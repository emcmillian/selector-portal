<?php
$id_num = $_POST['id_num'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "selector";
// Create connection
$conn = mysqli_connect('localhost', 'root', '','selector');

$sql = "INSERT INTO 'fields' ('id_num') VALUES ('1');"

$rs = mysqli_query($conn, $sql);

if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
?>