<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/register.css">
</head>

<body>
<div class="login-header-1">
    <p class="text-header">PSU-URDA SCHOLARSHIP RETENTION PREDICTING SYSTEM(RSPS)</p>
    <div class="login-logo">        
        <img class="logo" src="../Images/logo.png">
    </div>
</div>
<div class="login-header-2">
    <div class="link">
        <a href="">Policy</a> | <a href="">Help</a>
    </div>
</div>

<div class="login-header-3">
    <div class="header-text1">
        <h4>Student Service Office</h4>        
    </div>
    <div class="header-text2">        
        <h2>REGISTER TO PSU</h2>
    </div>
</div>

<div class="line-link">
    <a href="">Login></a><a href="">Register></a>
</div>

<div class="line-link0">
    <a href="">Enter your username and password to enter the system</a>
</div>

<div>
    <center>
    <form action="../PHP/register.php" method="post">
    <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="Role"><b>User Type</b></label>
    <select for="Role" class="user_type" name="roles" required>
        <option value="Admin">Admin</option>
        <option value="User">User</option>

    </select>

    <label for="std_id"><b>Student ID</b></label>
    <input type="text" placeholder="Enter Student ID" name="std_id"  required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw"  required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat"  required>
    <hr>
    <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->

    <input type="submit" name="submit" value="Register" class="registerbtn">
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>

    </form>
    </center>
</div>
</body>

<footer>
    <div class="link2">
        <a href="">Policy</a> | <a href="">Help</a>
    </div>
    <div class="line-link-footer">
        <a href="">Login></a><a href="">Register></a>
    </div>
    <div class="footer-text">
        <p>All right reserve, DATALINE Philippines. August 2003</p>
        <p>8th Floor, Ortigas Building, Ortigas Avenue fas</p>
        <p>Pasig City, Philippines</p>
        <p>Telephone(+632) 643-1529, 634-1958</p>
    </div>
</footer>
</html>