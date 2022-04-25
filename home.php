<?php
session_start(isset($_SESSION['id']) && isset($_SESSION['username'])){

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['username'];?>
    <a href="logout.php">Logout</a>
</body>
</html>
<?php
}
else{
    header("Location:sample.php");
    exit();
}
?>