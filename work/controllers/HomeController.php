<?php 
include "models/Home.php";
class HomeController{
    public function actionHome(){
        $ArraySms = array();
        
        $sms = "";
        $result = false;
        if(!empty($_POST['sms_submit']))
        {
            $sms = $_POST['sms'];
            $result = Home::check($sms);
            
            if($result == false)
            {
                Home::WriteDbSms($sms);
                $_POST['sms'] = "";
            }
        }
        $ArraySms = Home::InputSms();
//        $stack = array("orange", "banana");
//        array_push($stack, "apple", "raspberry");
//        print_r($stack);
        
        include "views/home/viewHome.php";
        
        
    }
}
?>