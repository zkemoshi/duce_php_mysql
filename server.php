<?php 
session_start();

include 'db.php';

$usernameExist = '';

// registration
if(isset($_POST['register']))
{
  
  $fullName = mysqli_real_escape_string($dbconnect, $_POST['fullName']);
  $email = mysqli_real_escape_string($dbconnect, $_POST['email']);
  $mobile = mysqli_real_escape_string($dbconnect, $_POST['mobile']);
  $password = mysqli_real_escape_string($dbconnect, $_POST['password']);

  // check if user already exist
  $user_check_query = "SELECT * FROM student WHERE email='$email' LIMIT 1";
  $result = mysqli_query($dbconnect, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if($user){
            $usernameExist='Please user already exist';
  } else {
    // add user to database
    $insert_student_query = "INSERT INTO student (fullName, email, mobile, password) VALUES('$fullName', '$email','$mobile', '$password')";
  	
    mysqli_query($dbconnect, $insert_student_query);

  	$_SESSION['fullName'] = "Student: $fullName";
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');

  }
}

// Login
if(isset($_POST['login'])){
  
  $email = mysqli_real_escape_string($dbconnect, $_POST['email']);
  $password = mysqli_real_escape_string($dbconnect, $_POST['password']);

  $user_check_query = "SELECT * FROM student WHERE email='$email' AND password='$password' LIMIT 1";
  $result = mysqli_query($dbconnect, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if(!$user){
      $usernameExist='Invalid credetial';
  } else {
   

    $_SESSION['fullName'] = $user['fullName'];
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');

  }


}

if(isset($_GET['logout'])){
  session_destroy();
  header('location: login.php');


}
?>