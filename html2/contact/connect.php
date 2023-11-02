<?php
$Email_id=$_POST['email']
$Password = $_POST['passwoard']

//database connection

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into contact(email,password) values(?,?)");
    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();
    echo"sign-in successfully....";
    $stmt->close();
    $conn->close();
}

?>
