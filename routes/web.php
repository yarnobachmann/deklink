<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@gethome');

Route::get('/over', 'PagesController@getover');

Route::get('/over/zaal', 'PagesController@getzaal');

Route::get('/over/bestuur', 'PagesController@getbestuur');

Route::get('/over/info', 'PagesController@getinfo');

Route::get('/over/vrijwilligers', 'PagesController@getvrijwilligers');

Route::get('/over/beheer', 'PagesController@getbeheer');

Route::get('/galerij', 'PagesController@getgalerij');

Route::get('/contact', 'PagesController@getcontact');
