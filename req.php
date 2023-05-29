<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Login Page</title>
    <style>
             body {
    margin: 0;
    padding: 0;
    background: url(img/bg.png);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: sans-serif;
}
    </style>
</head>
<body>
    <div class="input">
        <h1>REGRISTRASI</h1>
        <form action="register.php" method="POST">
            <div class="box-input">
                <i class="fas fa-address-book"></i>
                <input type="text" name="username" placeholder="username">
            </div>
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text"name="email" placeholder="email">
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            <a href="login.html">
                <button type="submit" name="register" class="btn-input">Registrasi</button>
            </a>
            <div class="buttom">
                <h4>Sudah punya akun?
                    <a href="index.php">Login disini</a>
                </h4>
            </div>
        </form>
       
    </div>
</body>
</html>