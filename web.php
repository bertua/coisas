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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/cow.html', [\App\Http\Controllers\Say::class,'cow']);
Route::get('/dragon.html', [\App\Http\Controllers\Say::class,'dragon']);
Route::get('/whale.html', [\App\Http\Controllers\Say::class,'whale']);
Route::get('/tux.html', [\App\Http\Controllers\Say::class,'tux']);

/*Route::get('/cowsay', function () {
    $quote = Inspiring::quotes()->random();
    return response(Cow::say($quote), 200)
     ->header('Content-Type','text/plain');

});

Route::get('/cowsay.html', function () {
    $quote = Inspiring::quotes()->random();
    $talking_animal = Farm::create(\Cowsayphp\Farm\Cow::class);
    return view('talking_animal',[
        'talking_animal' => $talking_animal->say($quote)
    ]);
});

Route::get('/dragonsay.html', function () {
    $quote = Inspiring::quotes()->random();
    $talking_animal = Farm::create(\Cowsayphp\Farm\Dragon::class);
    return view('talking_animal',[
        'talking_animal' => $talking_animal->say($quote)
    ]);
});

Route::get('/whalesay.html', function () {
    $quote = Inspiring::quotes()->random();
    $talking_animal = Farm::create(\Cowsayphp\Farm\Whale::class);
    return view('talking_animal',[
        'talking_animal' => $talking_animal->say($quote)
    ]);
});

Route::get('/tuxsay.html', function () {
    $quote = Inspiring::quotes()->random();
    $talking_animal = Farm::create(\Cowsayphp\Farm\Tux::class);
    return view('talking_animal',[
        'talking_animal' => $talking_animal->say($quote)
    ]);
});
*/
