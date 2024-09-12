<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
 
    <div class="formulariologin">
        <form action="valida_login.php" method="get">
        <div class="nome">
            <label for="username"><p class="text-form">Login:</p></label>
            <input type="text" id="username" name="username"/>
          </div>
          
          <div class="senha">
            <label for="pass"><p class="text-form">Password:</p></label>
            <input type="password" id="senha" name="password"/>
          </div>
          
          <div class="botao"><input class="botao-env" type="submit" value="Sign in"/></div>
          

    </div>
    </form>
    
</body>
</html>