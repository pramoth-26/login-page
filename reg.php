<html>
<head>
    <link rel="stylesheet" href="login.css">
    <title>Register Form</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Register Form</h2>
            <form method="post">
                <label for="fullname">Full Name</label>
                <input type="text" name="username" placeholder="Enter your full name">
          
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter your email">
          
                <label for="new-password">New Password</label>
                <input type="password" name="password" placeholder="Enter your new password">
          
                <button type="submit">Register</button>
              </form>
            <div class="switch">Don't have an account? <a href="logins.php">Register here</a>
            </div>
        </div>
    </div>
</body>
</html>


<?php
if(isset($_POST["submit"]))
{
require("connection.php");
$sql="insert into reg values('$_POST[username]','$_POST[email]','$_POST[password]')";

if ($conn->query($sql) === TRUE) 
  {
    echo "New record created successfully";
  } 
else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();

}
echo "<a href='webpage.html'><img src=icon.png width=100 height=50> </a>";
?>