<html>
    <head>
      <title>Login Form</title>
        <link rel="stylesheet" href="login.css">
    </head>
  <body>
    <div class="container">
      <div class="card">
        <h2>Login Form</h2>
        <form method=post>
          <label for="username">Username</label>
          <input type="text" id="username" placeholder="Enter your username">

          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Enter your password">

          <button type="submit">Login</button>
        </form>
        <div class="switch">Don't have an account? <a href="reg.php">Register here</a>
        </div>
      </div>
    </div>
  
  </body>
</html>

<?php
if(isset($_POST["submit"]))
{
require("connection.php");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from login where username = '$username' and password = '$password'" ;
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_array($result , MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count == 1)
{
echo "login successfully";
}
else
{
echo "check your username and password";
}
}
?>
