<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/home', function () {
    echo "<h1>Esta é a rota Home</h1>";
})->name('Home');

Route::get('/user/{id}', function ($userId) {
    echo "Este é o perfil do usuário $userId";
})->name('user.profile');

Route::get('/post/{slug}', function ($slug) {
    echo "Você esta no artigo $slug do meu blog";
})->name('blog.post');

Route::get('/category/{category}', function ($category) {
    echo "Você esta na categoria $category do meu blog";
})->name('blog.category');

Route::get('/user/{id}/language/{lang?}', function ($id, $lang = 0) {
    echo "Este é o perfil da $id.";
    if ($lang != 0) {
        echo "E você escolheu o idioma $lang";
    }
})->name('user.profile.language');

Route::get('/products/{category}/{minPrice?}', function ($category, $minPrice = 0) {
    echo "<h1>Você esta na categoria $category</h1>";
    if ($minPrice != 0) {
        echo "O menor preço dessa categoria é $minPrice";
    } else {
        echo "Você não optou por vizualizar o menor preço. :/";
    }
})->name('products.category.price');

Route::get('/page/{page}', function ($page) {
    echo "Você esta na página $page";
})->name('page.number')->where('page', '[/\b\d+\b/]');

Route::get('/convert/{currency}', function ($currency) {
    echo "O valor convertido em dollar é:" . $currency * (0.19);
})->name('currency.converter')->where('currency', '[/^\d+(\.\d{1,2})?$/]');

Route::get('/sum/{number1}/{number2}', function ($number1, $number2) {
    echo "A soma dos valores é:" . $number1 + $number2;
})->name('sum.numbers');

Route::get('/ultima-rota', function () {
    return view('the-last-one');
});
