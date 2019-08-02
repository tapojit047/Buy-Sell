<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}

$Username = $_POST['emailid'];
$Password = $_POST['pass'];

$sql = "insert into acc(emailid, pass) values('$Username', '$Password')";

if(mysqli_query($conn,$sql)){
    echo "Database created successfully";
}
else{
    echo "Error creating database: ".mysqli_error($conn);
}

mysqli_close($conn);

?>