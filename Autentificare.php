<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Log-in</title>
    <link rel="stylesheet" href="css/style_login.css">
  </head>
  <body>
    <div class="login-card">
    <h1>Log-in</h1>
    <br>
    <form method="POST" action="login.php">
        <input type="text" name="username" placeholder="Username" required pattern="[a-z]{3,30}[.]{1}[a-z]{3,30}[0-9]{2}" title="Introduceti user sub forma nume.prenumeXX, unde XX=ultimele 2 cifre ale anului de nastere">
        <input type="password" name="password" placeholder="Password" required title="CNP-ul :)">
        <input type="submit" name="submit" class="login login-submit" value="Log-In">
    </form>
    <div class="login-help">
       <a href="Register">Register</a>
       <a href="Situatia_Notelor">Home</a>
    </div>
</div>
</body>
</html>
