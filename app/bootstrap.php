<?php

/**
 * Error Handler
 */
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

/**
 * Enable composer autoload
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * The container loads all classes registered in the registration file,
 * the path to which must be passed to the setRegistersPath() method. 
 * Next, through the container, get an Application object and boot the application.
 */

$container = \Core\Container\Container::getInstance();
$container->setRegistersPath($_SERVER['DOCUMENT_ROOT'] . '/../config/registers.php');
$application = $container->get(\Core\Interfaces\Application\Application::class);
$application->start();

/**
 * And then get response
 */
$response = $container->get(Core\Interfaces\Response\Response::class);
$response->render();