<?php 
session_start();
$_SESSION['message'] ='';
include 'db.php';
?>
<!DOCTYPE html>
<html>
<body>
  <form method="post"  action="signup_server.php">
  <p>Please fill in this form to create an account.</p>
      <table>
    <tr>
      <td>username</td>
      <td><input type="text" class="textInput" placeholder="Enter username" name="username" required></td>
    </tr>
    <tr>
      <td>email</td>
      <td><input type="email" class="textInput" placeholder="Enter Email" name="email"></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input type="password" class="textInput" placeholder="Enter password" name="password"></td>
    </tr>
    <tr>
      <td>Confirm password</td>
      <td><input type="password" class="textInput" placeholder="Enter password again" name="password2"></td>
    </tr>
    <tr>
      <td><input type="submit" name="signupbtn" value = "Register"></td>
    </tr>
    </table>
    </form>
    
	<p>
  		Already a member? <a href="index.php">Sign in</a>
  </p>
</body>
</html>
      <!-- 
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required><br><br>
      
      <label for="username"><b>User Name</b></label>
      <input type="text" placeholder="Enter username" name="username" required><br><br>


      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>


      <label for="password2"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br><br>

      
  
      <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> -->



