<?php
include "models/User.php";
class UserController
{
    public function actionStart(){
        include "views/users/viewStart.php";
        return true;
    }
    
    public function actionSignup(){
        $result = false;
        $login = "";
        $password1 = "";
        $password2 = "";
        
        if(isset($_POST['to_signup'])){
                
            $login = $_POST['login'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];
            $users = User::check($login,$password1,$password2);
            if(!$users){
                //регестрируем
                $result = User::register($login,$password1);
            }else{
                echo array_shift($users);
            }
        }
        include "views/users/viewSignup.php";
        return true;
    }
    public function actionLogin(){
        $log = false;
        $login = '';
        $password = '';
        if(isset($_POST['to_login'])){
            $login = $_POST['login'];
            $password = $_POST['password'];
            $log = User::entrance($login,$password);
            if($log){
                echo array_shift($log);
            }
        }
        include "views/users/viewLogin.php";
        return true;
    }
    public function actionLogout(){
        unset($_SESSION['user']);
        header("Location:login");
        return true;
    }
}
?>