<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <div>Авторизация</div>
    <form action="" method="post">
        <input type="text" name="login" placeholder="Введите логин" value="<?php echo $login?>"><br>
        <input type="password" name="password" placeholder="Повторите пароль"><br>
        <!--<input type="button" name="to_signup" placeholder="Отправить">-->
        <input type="submit" name="to_login">
    </form>
    <a href="signup">Регистрация</a>
    
</body>
</html>