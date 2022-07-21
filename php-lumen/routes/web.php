<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/hello', 'Controller@hello');
$app->get('/compute', 'Controller@compute');
$app->get('/countries', 'Controller@countries');
$app->get('/users', 'Controller@users');