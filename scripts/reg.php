<?php
/**
 * Created by PhpStorm.
 * User: Emil
 * Date: 25.1.2015.
 * Time: 2:38
 */

include_once('connectConfig.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = R::dispense('users');
    $user->name = $_POST['name'];
    $user->surname = $_POST['surname'];
    $user->username = $_POST['username'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    $id = R::store($user);
    $user = R::load('users', $id);
    echo $user->name;
}
ini_set('display_errors', 1);
?>