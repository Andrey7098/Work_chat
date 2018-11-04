<?php 
class Home{
    public static function check($sms)
    {
        $errors = false;
        if($sms == "")
        {
            $errors = "Невозможно отправить пустое сообщение!";
        }
        return $errors;
    }
    public static function WriteDbSms($sms)
    {
        $user = R::Dispense("sms");
        $user->sms = $sms;
        $user->data = date("d:m:y h:i:s");
        $user->dataa = date("h:i:s");
        $user->user = $_SESSION['user']->login;
        R::store($user);
        return true;
    }
    public static function InputSms(){
        $Array = array();
        $Array = R::find('sms',"ORDER BY 'data' DESC");
        
        return $Array;
    }
}
?>