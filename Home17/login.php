<?php
session_start();
if (isset($_POST["submit"])) {
    $username = mysqli_real_escape_string($connect, trim(stripslashes(htmlspecialchars($_POST['username']))));
    $password = mysqli_real_escape_string($connect, trim(stripslashes(htmlspecialchars($_POST['password']))));
    if (!empty($username) && !empty($password)) {
        $query = "SELECT `id` , `username` FROM `users` WHERE username = '$username' AND password = md5('$password')";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION["id"] = $row["id"];
            $_SESSION["username"] = $username;
            header("Location: index.php");
        } else {
            $error = "Invalid username or password!";
        }
    } else {
        $error = "Login or password are not filled!";
    }
}
?>
