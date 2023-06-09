<?php
if (isset($_GET["mes"])){
  echo $_GET["mes"];
}
?>
<?php
if (isset($_GET["mess"])){
  echo $_GET["mess"];
}
?>
<html><head>
    <link rel="stylesheet" href="style1.css" type="text/css">

</head>
<body>


<div class="logincon">
   <center> <h4>Sign in  Here</h4></center>
<form action="select.php" method="post">
  <label >Username:</label>
  <input type="text"  name="name" required>
  <label >Password:</label>
  <input type="text"  name="password" required>
  <button >Sign in</button>
  <div class="adiv">
  <a href="register.php">Register</a>
  </div>
</form>
</div>
</body>
</html>
