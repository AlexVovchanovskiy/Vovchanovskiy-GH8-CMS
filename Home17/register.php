<?php
session_start();
include("connectDB.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<h1 class="text-center">Registration</h1>

<?php
if (isset($_POST["submit"])) {
    if (empty($_POST["username"])) {
        $error = "You have not entered login!";
    } elseif (empty($_POST["email"])) {
        $error = "You have not entered email!";
    } elseif (empty($_POST["password"])) {
        $error = "You have not entered password!";
    } elseif (empty($_POST["repeat_password"])) {
        $error = "You have not confirm password!";
    } elseif ($_POST["password"] != $_POST["repeat_password"]) {
        $error = "The two password do not match!";
    } elseif (empty($_POST["first_name"])) {
        $error = "You have not entered first name!";
    } elseif (empty($_POST["last_name"])) {
        $error = "You have not entered last name!";
    } elseif (empty($_POST["age"])) {
        $error = "You have not entered last age!";
    } else {
        $username = trim(stripslashes(htmlspecialchars($_POST["username"])));
        $email = trim(stripslashes(htmlspecialchars($_POST["email"])));
        $password = md5(trim(stripslashes(htmlspecialchars($_POST["password"]))));
        $first_name = trim(stripslashes(htmlspecialchars($_POST["first_name"])));
        $last_name = trim(stripslashes(htmlspecialchars($_POST["last_name"])));
        $age = trim(stripslashes(htmlspecialchars($_POST["age"])));
        $gender = trim(stripslashes(htmlspecialchars($_POST["gender"])));

        $query = mysqli_query($connect, "SELECT * FROM `users` WHERE username='$username'");
        $numr = mysqli_num_rows($query);
        if ($numr == 0) {
            $query = "INSERT INTO users (username, email, password, first_name, last_name, age, gender)
        VALUES ('$username', '$email', '$password', '$first_name', '$last_name', '$age', '$gender')";
            $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
            if ($result == 1) {
                $confirm = "Registration completed successfully! You will be redirected to the main page in 3 seconds.";
                header("Refresh: 3; index.php");
            }
        } else {
            $error = "This username is used, try another please!";
        }
    }
}
$connect->close();
?>

<div class="text-danger text-center"><?php echo $error ?></div>
<div class="text-success text-center"><?php echo $confirm ?></div>
<form class="row m-0" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="m-auto col-10 col-sm-8 col-md-6 col-lg-4">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="repeat_password">Repeat password:</label>
            <input type="password" id="repeat_password" name="repeat_password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="first_name">First name:</label>
            <input type="text" id="first_name" name="first_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last name:</label>
            <input type="text" id="last_name" name="last_name" class="form-control" required>
        </div>
        <div class="form-group row">
            <div class="col-4">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" class="form-control" required>
            </div>
            <div class="col-8">
                <fieldset class="row text-center">
                    <legend class="col-form-label pt-0 mb-2">Gender:</legend>
                    <div class="row">
                        <div class="col-6">
                            <input type="radio" id="male" name="gender" value="male" checked>
                            <label for="male">Male</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary w-100">
    </div>
</form>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
