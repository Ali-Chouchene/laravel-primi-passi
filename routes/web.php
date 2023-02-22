<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $message = 'Hello World';
    $intro = 'My First Page Using Laravel';

    $data = ['message' => $message, 'intro' => $intro];
    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    $message = 'About Laravel';
    $intro = ' Laravel is an open-source PHP framework, which is robust and easy to understand. It follows a model-view-controller design pattern. Laravel reuses the existing components of different frameworks which helps in creating a web application. The web application thus designed is more structured and pragmatic.
    Laravel offers a rich set of functionalities which incorporates the basic features of PHP frameworks like CodeIgniter, Yii and other programming languages like Ruby on Rails. Laravel has a very rich set of features which will boost the speed of web development.
    If you are familiar with Core PHP and Advanced PHP, Laravel will make your task easier. It saves a lot time if you are planning to develop a website from scratch. Moreover, a website built in Laravel is secure and prevents several web attacks.';

    $data = ['message' => $message, 'intro' => $intro];
    return view('about', $data);
})->name('about');

Route::get('/info', function () {
    $message = 'You Can Find More Info Here';
    $intro = 'https://laravel.com/';

    $data = ['message' => $message, 'intro' => $intro];
    return view('about', $data);
})->name('info');
