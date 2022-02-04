<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<?php include 'server.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="regContainer">
    
    <div class="regForm">
      <?php echo $usernameExist; ?>
      <h2>Student Login</h2>
      <form action="login.php" method='post' >
        
        <input type="email" name="email" id="email" placeholder='Enter your Email' required>
        
        <input type="password" name="password" id="password" placeholder='Enter your password' required>

        <input type="submit" value="Login" name='login' class='btn'>
      </form>
    </div>
  </div>
</body>
</html>