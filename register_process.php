<?php

include './db.php';
include './header.php';


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username , password, role) values ('$username', '$password' , '$role')";

    $result = $conn->query($sql);

    if ($result) {
        header("Location: index.php?register=success");
    } else {
        echo "<div class='alert alert-danger>Error:  Registration failed</div>";
    }
}
?>