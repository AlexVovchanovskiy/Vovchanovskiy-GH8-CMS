<?php
session_start();
include("connectDB.php");
include("login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home17</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<?php
if (empty($_SESSION["id"])) {
    ?>
    <div class="text-danger text-center"><?php echo $error ?></div>
    <form class="row m-0" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <div class="m-auto col-10 col-sm-8 col-md-6 col-lg-4">
            <div class="form-group">
                <label for="username">Login:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary col-md-6">
            <a class="col-md-6" href="register.php">Registration</a>
        </div>
    </form>

    <?php
} else {
    ?>
    <a href="index.php" class="btn">Home</a>
    <a href="newpost.php" class="btn">New post</a>
    <a href="allposts.php" class="btn">All posts</a>
    <a href="logout.php">Exit, <?php echo $_SESSION["username"]; ?></a>
    <?php
}
?>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
