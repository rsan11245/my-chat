<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-wrapper">
    <div class="form">
        <div class="logo">
            <img src="images/logo.png" class="logo-img">
        </div>
        <div class="form-title">
            <h2 class="h2">Вход</h2>
        </div>
        <div class="form-group">
            <label>Почта</label>
            <input type="email" placeholder="Введите email" class="input">
            <p class="error">email error</p>
        </div>
        <div class="form-group">
            <label>Пароль</label>
            <input type="password" placeholder="Введите пароль" class="input">
            <p class="error">email error</p>
        </div>
        <button class="form-submit-button">
            Войти
        </button>

        <div class="auth-redirect">
            <a href="signup-page.php">Sign Up</a>
        </div>
    </div>
</div>
</body>
</html>