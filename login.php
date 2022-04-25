<?php
session_start();
include "db_conn.php"
if(isset($_POST['uname']) && isset($_POST['password'])){
    function validate($data)
    {
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
    }
}
$uname=validate($_POST['uname']);
$pass=validate($_POST['password']);

if(empty($uname))
{
    header("Location:sample.php?error=Username is required");
    exit();
}
elseif(empty($pass)){
    header("Location:sample.php?error=Password is required");
    exit();
}

$sql="SELECT * from users where username='$uname' and password='$pass'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)===1)
{
    $row=mysqli_fetch_assoc($result);
    if($row['username']===$uname && $row['password']===$pass){
        echo "Logged in";
        $_SESSION['username']=$row['username'];
        $_SESSION['name']=$row['name'];
        $_SESSION['id']=$row['id'];
        header("Location: home.php");
    }
    else{
        header("Location:sample.php?error=username or password is incorrect");
        exit();
    }
    
}
else{
    header("Location:sample.php");
    exit();
}