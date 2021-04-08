<?php
include 'db.php';


// REGISTER USER
if (isset($_POST['signupbtn'])) {
  // receive all input values from the form
   $username = mysqli_real_escape_string($conn,  $_POST['username']);
   $email = mysqli_real_escape_string($conn,  $_POST['email']);
   $password = mysqli_real_escape_string($conn,  $_POST['password']);
   $password2 = mysqli_real_escape_string($conn,  $_POST['password2']);

  if ($password == $password2) {
    //$password = md5($password);//encrypt the password before saving in the database
   $sql = "INSERT INTO user (email, username, password) VALUES( '$email','$username', '$password')";
  if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('location:index.php');
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
    $_SESSION['message'] = "$username";
    $_SESSION['success'] = "You are now logged in";
  }
  else {
      $_SESSION['message'] ="The two password do not match";
  }



}

$conn->close();





?>











