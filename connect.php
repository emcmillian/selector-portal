<?php
$id = filter_input(INPUT_POST, 'id');
if (!empty($id)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "selector";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (id) values ('$id')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "ID should not be empty";
die();
}
?>