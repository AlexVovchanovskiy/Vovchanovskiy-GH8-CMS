<?php
$connect = mysqli_connect('127.0.0.1', 'root', '1', 'test') or die(mysqli_error($connect));
if (isset($_POST['submit'])) {
    if (empty($_POST['username'])) {
        $info_reg = 'You have not entered login!';
    } elseif (empty($_POST['email'])) {
        $info_reg = 'You have not entered email!';
    } elseif (empty($_POST['password'])) {
        $info_reg = 'You have not entered password!';
    } elseif (empty($_POST['repeat_password'])) {
        $info_reg = 'You have not confirm password!';
    } elseif ($_POST["password"] != $_POST["repeat_password"]) {
        $info_reg = "The two password do not match!";
    } elseif (empty($_POST['first_name'])) {
        $info_reg = 'You have not entered first name!';
    } elseif (empty($_POST['last_name'])) {
        $info_reg = 'You have not entered last name!';
    } elseif (empty($_POST['age'])) {
        $info_reg = 'You have not entered last age!';
    } else {
        $username = trim(stripslashes(htmlspecialchars($_POST['username'])));
        $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
        $password = md5(trim(stripslashes(htmlspecialchars($_POST['password']))));
        $first_name = trim(stripslashes(htmlspecialchars($_POST['first_name'])));
        $last_name = trim(stripslashes(htmlspecialchars($_POST['last_name'])));
        $age = trim(stripslashes(htmlspecialchars($_POST['age'])));
        $gender = trim(stripslashes(htmlspecialchars($_POST['gender'])));

        $query = mysqli_query($connect, "SELECT * FROM `users` WHERE username='$username'");
        $numr = mysqli_num_rows($query);
        if ($numr == 0) {

            $query = "INSERT INTO `users` (username, email, password, first_name, last_name, age, gender)
        VALUES ('$username', '$email', '$password', '$first_name', '$last_name', '$age', '$gender')";
            $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
            if ($result == 'TRUE') {
                echo "You have successfully registered!";
            }
        } else {
            echo "This username is used, try another please!";
        }
    }
}

$info_reg = isset($info_reg) ? $info_reg : NULL;
echo $info_reg;

$connect->close();
?>
