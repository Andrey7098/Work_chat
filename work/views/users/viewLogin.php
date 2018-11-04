<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        <?php include "template/CSS/CSS.css";?>
    </style>
</head>
<body>
  <div class="center">
   <div class="text_chat_login">Авторизация</div>
    <form action="" method="post">
        <input type="text" name="login" placeholder="Введите логин" value="<?php echo $login?>" class="input"><br>
        <input type="password" name="password" placeholder="Повторите пароль" class="input"><br>
        <!--<input type="button" name="to_signup" placeholder="Отправить">-->
        <input type="submit" name="to_login" class="button left">
    </form>
    <a href="signup"><div class="button left">Регистрация</div></a>
    </div>
</body>
</html>