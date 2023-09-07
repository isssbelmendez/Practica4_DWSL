<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tbl_usuarios (username, password)
    VALUES ('$username', '$password')";

    if ($enlace->query($sql)){
        echo "New record created successfully";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
?>