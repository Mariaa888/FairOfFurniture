<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel & MySql DB Connection</title>
</head>
<body>
    <?php
    

$con = mysqli_connect('localhost', 'root', '', 'fairoffurniture');
if (!$con) {
    die('error' . mysqli_connect_error());
} else {
    echo "its connected";
}
?>
</body>
</html>