<?php
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'portaria' and $_POST['password'] == 'FatecAraras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'portaria';
         header("location: index.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
      
   
</head>
<body>
    <div>
        <h2>Login</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label>Username</label>
                <input type="text" name="username" value="">
                <span class="help-block"></span>
                <br><br>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="">
                <span class="help-block"></span>
                <br><br>
            </div>
            <div class="form-group">
                <input type="submit" value="Entrar">
            </div>
        </form>
    </div>    
</body>
</html>
