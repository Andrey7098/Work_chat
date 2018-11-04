<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div>Регистрация</div>
    <form action="" method="post">
        <input type="text" name="login" placeholder="Введите логин" value="<?php echo $login?>"><br>
        <input type="password" name="password1" placeholder="Введите пароль"><br>
        <input type="password" name="password2" placeholder="Повторите пароль"><br>
        <!--<input type="button" name="to_signup" placeholder="Отправить">-->
        <input type="submit" name="to_signup">
    </form>
    <a href="login">Вход</a>
</body>
</html>