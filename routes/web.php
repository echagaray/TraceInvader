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

Route::get('/', function () {
    return view('main');
});

// Route::get('/home', function () {
//     return view('main');
// });


Route::get('/contact', function()
{
  return view('contact');
});


Route::get('/species', function()
{
  return view('species');
});

Route::get('/faq', function()
{
  return view('faq');
});

Route::get('/login', function()
{
  return view('login');
});


Route::get('/register', function()
{
  return view('register');
});



//

//


// Route::get('/space', function()
// {
//   return view('space');
// });
