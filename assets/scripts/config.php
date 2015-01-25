<?php

include_once('biblioteke/handlebars.php/src/Handlebars/Autoloader.php');
include_once('biblioteke/rb/rb.php');


R::setup('mysql:host=localhost;dbname=WebDiP2013_057', 'WebDiP2013_057','admin_CFq8');
  Handlebars\Autoloader::register();
  use Handlebars\Handlebars;


  function render_engine() {
    $engine = new Handlebars(array(
      'loader' => new \Handlebars\Loader\FilesystemLoader(__DIR__ . '/template/'),
      'partials_loader' => new \Handlebars\Loader\FilesystemLoader(__DIR__ . '/template/', array('prefix' => '_'))
      )
    );
    return $engine;
  }
?>