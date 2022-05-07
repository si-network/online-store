<?php

use Core\Routing\Router;
use Core\Facades\View;

/**
 * 	Add routes to routes collection
 */

Router::get('/')->controller('Main','index');
Router::get('/d/showProducts={from}')->controller('Main','showMoreData')->where(['from' => '\d+']);

Router::get('/catalog')->controller('Catalog','index');
Router::get('/catalog/{categoryName}')->controller('Catalog', 'showCatalogByCategoryName');
Router::get('/catalog/{categoryName}/f/{filters}')->controller('Catalog', 'showCatalogByCategoryName')->where(['filters' => '([\w=\%]+/?[\w=\%-.]+)+']);
Router::get('/catalog/d')->controller('Catalog', 'getAjaxData');

Router::get('/promotions')->controller('Promotion','index');
Router::get('/promotions/{id}')->controller('Promotion','showPromoById')->where(['id' => '[0-9]+']);

Router::get('/about')->controller('About','index');

Router::get('/contacts', function() {
    View::show('contacts.twig');
});