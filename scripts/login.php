<?php
/**
 * Created by PhpStorm.
 * User: Emil
 * Date: 25.1.2015.
 * Time: 14:59
 */

include_once('connectConfig.php');
session_start();
if(isset($_POST))  {
    $mail = $_POST['email'];

    $login = R::findOne( 'userInfo', ' email = :var_email ',array(":var_email" => $mail) );
    if ($login == null){
        echo "Wrong email";
    }
    else {
        $pass = $_POST['key'];
        if ($login->password != $pass || $login->email != $mail) {
            echo "Wrong password";
        } else {
            //R::store($login);
            $_SESSION['userid'] = $login->id;
            header("Location:../statistics.php");
            //echo $_SESSION['userid'];
        }
    }


}
