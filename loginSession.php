<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbl_usuarios
    WHERE username = '$username' AND password = '$password'";
    $result = $enlace->query($sql);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
        echo "id:" . $row["id_usuario"]
        . "- Name: "
        . $row["username"]
        . " " . $row["password"]. "<br>";
          }
    }
}


?>