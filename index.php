<?php 
include 'server.php';

// if(!$_SESSION['fullName']){
//   header('location: index.php');
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Changombe Sec School</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
      <ul>
        <li>
          <a href="server.php?logout=1" class='nav-logout'>Logout</a>
        </li>
      </ul>
    </nav>
  <div class="container">
    
    <h1>Welcome to Changombe Secondary School</h1>
    <h2>Student: <?php echo $_SESSION['fullName']; ?></h2>
    <h2><?php echo $_SESSION['success']; ?></h2>
  </div>
</body>
</html>