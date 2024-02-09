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

Route::get('/', function () {
    $saluti = [
        'benvenuto' => 'Hello World!!',
        'hello' => ['¡Hola', 'Ahoj', 'Alo', 'Annyeonghaseyo', 'Ave', 'Ciao', 'Cześć', 'Goeie môre', 'Hallå', 'Hallo', 'Halo', 'Hei', 'Hej', 'Hujambo', 'Konnichiwa', 'Kumusta', 'Marhabaan', 'Merhaba', 'Mingalaba', 'Namaskāra', 'Namasté', 'Nazdar', 'Nín hao', 'Olá'],
    ];

    return view('homepage', $saluti);
});
