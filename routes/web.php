<?php

use Illuminate\Support\Facades\Route;

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
//view all links

Route::get('/links',function(){});

// view a single link

Route::get('/links/{name}',function($name){});

// Create a link( show a form)

Route::get('/links/create', function($name){});

// Create a link ( processs the form)

Route::post('/link/{name}', function($name){});


// edit/update a link ( view form)
Route::get('/links/{name}',function($name){});


// edit/update a link ( process the form)
Route::patch('/links/{name}',function($name){});

// delete a link 

Route::delete('/links/{name}', function($name){});
