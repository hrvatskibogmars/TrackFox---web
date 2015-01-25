<?php
/**
 * Created by PhpStorm.
 * User: Emil
 * Date: 24.1.2015.
 * Time: 15:52
 */

ini_set('display_errors', 1);
require('assets/lib/rb.php');
R::setup('sqlite:SigFox.db', '','');
//R::setup('mysql:host=localhost;dbname=sigfox','root','');
//$book = R::dispense('tablica');
//$book->ime = 'marsinjo';
//$id = R::store($book);
//$book = R::load('tablica', $id);
//echo $book->ime;

?>
