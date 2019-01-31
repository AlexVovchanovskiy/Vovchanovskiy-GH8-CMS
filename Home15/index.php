<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<?php

$arr = array(3, 5, 1, 8, 7, -1, 4, 9, 0, 6, -3, 2);

function sortInsert($arr)
{
    for ($i = 1; $i < count($arr); $i++) {
        $key_value = $arr[$i];
        $j = $i - 1;
        while ($arr[$j] > $key_value) {
            
        }
        $arr[$j + 1] = $key_value;
    }
    return $arr;
}

echo '<pre>';
echo '<strong>Before sort:</strong>';
print_r($arr);
echo '<strong>After sort:</strong>';
print_r(sortInsert($arr));
echo '</pre>';
?>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
