<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Чат</title>
    <style>
        <?php include "template/CSS/CSS.css";?>
    </style>
</head>
<body>
    <?php if(isset($_SESSION['user'])):?>
        <p class="exit">Вы вошли успешно,ваш логин <?php echo $_SESSION['user']->login;?></p>
        <a href="logout"><div class="button ridth">Выход</div></a>
         <div class="center_chat">
       
        <div class="form_chat">
            <?php foreach($ArraySms as $sms):?>
               <?php if($_SESSION['user']->login == $sms->user): ?>
                    <div class="sms_chat">
                <?php else: ?>
                    <div class="sms1_chat">
                <?php endif; ?>
                    <div class="fixed">
                        <div class="user">Отправитель <?php echo $sms->user;?></div>
                        <div class="time"><?php echo $sms->dataa;?></div>
                    </div>
                    <div class="sms"><?php echo $sms->sms;?></div>
                   
                </div>   
            <?php endforeach;?>
        </div>
         <form method="post" class="center_form">
            <input class="input" type="text" placeholder="Введите сообщение"name="sms">
            <input class="button" type="submit" name="sms_submit">
        </form>
        <p><?php echo $result;?></p>
        </div>
        
        
        
    <?php else:?>
        <p>Вы не автризированы,пожалуйста <a href="login">войдите</a>!</p>
    <?php endif;?>
</body>
</html>