<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <?php if(isset($_GET['error'])){?>
        <p> class="error" <?php echo $_GET['error']?> </p>
  <?php  }?>
  <label>Username</label>
  <input type="text" name="uname" placeholder="Username"><br>
  <label>Password</label>
  <input type="text" name="password" placeholder="Password"><br>
  <button type="submit" >Login</button>
        </form>
        </body>
        </html>
        

