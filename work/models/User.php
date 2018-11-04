<?php
class User{
    public static function check($login,$password1,$password2){
        $error = false;
        if($login == ""){
            $error[] = "Введите логин";
        }
         if($password1 == "")
        {
            $error[] = "Введите пароль!";
        }
        if($password2 != $password1)
        {
            $error[] = "Повторный пароль введен неверно!";
        }
        if(R::count('users', "login = ?", array($_POST["login"])) > 0)
        {
            $error[] = "Логин существует";
        }
        return $error;
    }
    public static function register($login,$password1)
    {
        $user = R::Dispense("users");
        $user->login = $_POST["login"];
        $user->password = password_hash($_POST["password1"],PASSWORD_DEFAULT);
        R::store($user);
        header("Location:login");
        return true;
    }
    public static function entrance($login,$password){
        $errors = false;
        //$join = R::getRow("SELECT * FROM users JOIN user_role ON users.id=user_role.id_user JOIN role ON role.id_role = user_role.id_role WHERE users.login = ? LIMIT 1",array($_POST["login"]));
        $user = R::findOne('users',"login = ?",array($_POST["login"]));
        if($user){
            //Пользователь найден,проверяем на пароль
            if(password_verify($_POST["password"],$user->password))
            {
                //пароль совпал,регистрируем
                //settype($join,"object");
                $_SESSION['user'] = $user;//$join
                header("Location:home");
            }else{
                //неверный пароль,фиксируем ошибку
                $errors[] = "Неверно введен пароль";
            }
        }else
        {
            //Пользователь не найден,фиксируем ошибку
            $errors[] = "Логин с таким именем не найден";
        }
        return $errors;
    }
}
?>