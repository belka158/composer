<?php

require __DIR__."/vendor/autoload.php";
$log = new Monolog\Logger("test");
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');
    
$test = new Test\Foo;
