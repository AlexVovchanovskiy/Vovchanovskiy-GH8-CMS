<?php
session_start();
include("connectDB.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All posts</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<a href="index.php" class="btn">Home</a>
<a href="newpost.php" class="btn">New post</a>
<h1 class="text-center"><?php echo $_SESSION["username"]?> posts</h1>

<?php
$userId = $_SESSION['id'];
$posts = [];
$query = "SELECT * FROM posts WHERE userID ='$userId'";
$result = $connect->query($query);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $post = array("title" => $row["title"], "post" => $row["post"], "time" => $row["time"], "postID" => $row["postID"]);
        array_push($posts, $post);
    }
} else {
    echo "0 results";
}
?>

<ul class="list-group">
    <?php
    foreach($posts as $key => $itemPost) {
        ?>
        <li class="list-group-item">
            <h2><?php echo $itemPost["title"] ?></h2>
            <p><?php echo $itemPost["post"] ?></p>
            <p class="text-info"><?php echo $itemPost["time"] ?></p>
        </li>
        <?php
    }
    ?>
</ul>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
