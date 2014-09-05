<?php

/*
 * Bootstrap file, main file
 * This file gets called by index.php
 */

$route = Route::getInstance();

$route->add('/', 'index', array("default" => "index",));

/*
 * Login Pages
 */
$route->add('/example', 'login', array("default" => "index",));
$route->add('/example/:action', 'login', array("action" => 1, "default" => "index",));

/*
 * Ajax/json pages
 */
$route->add('/ajax/:action', 'ajax', array("action" => 1, "default" => "more",));

if ($route->submit() == false) {
  $route->error();
}
