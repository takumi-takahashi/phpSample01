<?php

require_once 'C:/xampp/htdocs/MVCsumple01/framework/mvc/Dispatcher.php';

$dispatcher = new Dispatcher();
$dispatcher->setSystemRoot('C:/xampp/htdocs/MVCsumple01/ec');
$dispatcher->dispatch();

?>