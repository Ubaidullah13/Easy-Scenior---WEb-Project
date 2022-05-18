<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "easy_scenior";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    //echo "Connection OK<br>";
}
else{
    echo '<script>alert("Connection Failed")</scripalert>';
}
?>