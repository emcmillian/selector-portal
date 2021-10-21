<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "selector";

// $id_num = $_POST['id_num'];
$id_num = 2342;
$rec = alg1;
$reason = blah blah blah;
$fairest = alg1;


// Create connection
$conn = mysql_connect($host, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo 'Connected successfully';

//$db_selected = mysql_select_db(selector, $link);

$sql = "INSERT INTO fields (id_num, recommendation, reasoning, fairest) VALUES ($id_num, $rec, $reason, $fairest)";


if($sql){
echo "Success!";
}

else { "Error: " . mysql_error(); }
?>