<!DOCTYPE html>
<html lang="es">
<head>
       <meta charset="utf-8" />
</head>
 <body>
<div class="content">
    <div class="caja_login">
    <h2>Login con PDO y php</h2>
    <form class="form" action="login.php" method="post">
        
        <label>Nick</label>
        <input type="text" name="nick" required="true" placeholder="Introduce tu nick" />
        
        <label>Password</label>
        <input type="password" name="password" required="true" placeholder="Introduce tu password" />
        
        <input type="submit" value="Login" />
        
    </form>
    </div>
</div>
</body>
</html>