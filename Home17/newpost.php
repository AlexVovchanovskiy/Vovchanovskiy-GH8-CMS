<?php
session_start();
include("connectDB.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New post</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<a href="index.php" class="btn">Home</a>
<a href="allposts.php" class="btn">All posts</a>
<a href="logout.php" class="btn">Exit, <?php echo $_SESSION["username"]; ?></a>
<h1 class="text-center">New post, <?php echo $_SESSION["username"] ?>!</h1>

<?php
if (isset($_POST["submit"])) {
    if (empty($_POST["title"])) {
        $error = "Enter a title please";
    } elseif (empty($_POST["post"])) {
        $error = "Enter a post please";
    } else {
        $title = trim(stripslashes(htmlspecialchars($_POST["title"])));
        $post = trim(stripslashes(htmlspecialchars($_POST["post"])));
        $userId = $_SESSION["id"];
        $time = date("Y-m-d H:i:s");
        $query = "INSERT INTO posts (userId, title, post, time) VALUES ('$userId', '$title', '$post', '$time')";
        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
        if ($result == 1) {
            $confirm = "New record created successfully!";
        } else {
            echo "Connection error: " . $connect->connect_error;
        }
    }
}
$connect->close();
?>

<div class="text-danger text-center"><?php echo $error ?></div>
<div class="text-success text-center"><?php echo $confirm ?></div>
<form class="row m-0" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <div class="m-auto col-10 col-sm-8 col-md-6 col-lg-4">
        <div class="form-group">
            <label for="title">Title post </label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="post">Body post: </label>
            <textarea name="post" id="post" rows="5" cols="30" class="form-control"></textarea>
        </div>
        <input type="submit" name="submit" class="btn btn-primary col-md-6">
    </div>
</form>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
