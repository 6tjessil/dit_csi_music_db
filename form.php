<!--Contact page-->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>TJessil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  require("nav.php")
  ?>
  contact page
  <div id="id01" class="modal">
    <div id = "login_modal">
      <span onclick="document.getElementById('id01').style.display='none'"class="close" title="Close Modal">&times;</span>
      <h1>Login</h1>
      <form action="" method="post" id="login">
        <p>Username</p><input type="text" name="username" id="box" placeholder="Please enter a username" /><br />
        <p>Password</p><input type="password" name="password" id="box" placeholder="Please enter a password" /><br />
        <input type="submit" value="Login"/><br/>
      </form>  
    </div>
  </div>

</body>

</html>