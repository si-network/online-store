<?php

$container = \Core\Container\Container::getInstance();

/**
 *  Container methods register() and singleton() get the interface as the first parameter, 
 *  the implementation as the second parameter, and an array of the default parameters as the third parameter.
 *  The parameter name corresponds to the variable name of the method argument.
 * /

/**
 *  Core registers for container
 */

$container->singleton(\Core\Interfaces\Application\Application::class, \Core\Application\Application::class);

$container->singleton(\Core\Interfaces\Config\Config::class, \Core\Config\Config::class, [
    'config' => require $_SERVER['DOCUMENT_ROOT'] . '/../config/config.php'
]);

$container->singleton(\Core\Interfaces\View\ViewTemplateEngine::class, \Core\View\Twig\Twig::class, [
    'templatesPath' => $_SERVER['DOCUMENT_ROOT'] . '/../app/Views',
    'cashPath'      => $_SERVER['DOCUMENT_ROOT'] . '/../var/cache/twig'
]);

$container->singleton(\Core\Interfaces\View\View::class, \Core\View\View::class);

$container->singleton(\Core\Interfaces\Routing\Router::class, \Core\Routing\Router::class, [
    'routesFile' => $_SERVER['DOCUMENT_ROOT'] . '/../config/routes.php'
]);

$container->singleton(\Core\Interfaces\Request\Request::class, \Core\Request\Request::class);

$container->singleton(\Core\Interfaces\Response\Response::class, \Core\Response\Response::class);

$container->register(\Core\Interfaces\Database\Connection::class, \Core\Database\Connection\DBConnection::class);
$container->register(\Core\Interfaces\Storage\Query::class, \Core\Database\Query\MySql::class);

/**
 *  Container app registers
 */

//  *   *   *   *   *   *

/**
 *  Facades registers
 */

\Core\Facades\Facade::setContainer($container);
\Core\Facades\Facade::register(\Core\Facades\Request::class, \Core\Interfaces\Request\Request::class);
\Core\Facades\Facade::register(\Core\Facades\View::class, \Core\Interfaces\View\View::class);