<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Чат</title>
</head>
<body>
    <?php if(isset($_SESSION['user'])):?>
        <p>Вы вошли успешно,ваш логин <?php echo $_SESSION['user']->login;?></p>
        <a href="logout">Выход</a>
    <?php else:?>
        <p>Вы не автризированы,пожалуйста <a href="login">войдите</a>!</p>
    <?php endif;?>
    
</body>
</html>