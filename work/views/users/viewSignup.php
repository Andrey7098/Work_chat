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
    <div class="text_chat_login">Регистрация</div>
    <form action="" method="post">
        <input class="input"type="text" name="login" placeholder="Введите логин" value="<?php echo $login?>"><br>
        <input class="input"type="password" name="password1" placeholder="Введите пароль"><br>
        <input class="input"type="password" name="password2" placeholder="Повторите пароль"><br>
        <!--<input type="button" name="to_signup" placeholder="Отправить">-->
        <input type="submit" class="button left"name="to_signup">
    </form>
       <a href="login"><div class="button left" >Вход</div></a>
    </div>
</body>
</html>