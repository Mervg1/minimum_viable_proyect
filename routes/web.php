<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FormController;

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
    return view('welcome');
});

// Resource Route for article.
Route::resource('articles', 'ArticleController');
// Route for get articles for yajra post request.
Route::get('get-articles', [ArticleController::class, 'getArticles'])->name('get-articles');

Route::resource('form', 'FormController');

Route::get('get-forms', [FormController::class, 'getForms'])->name('get-forms');

Route::get('chart-line', 'ChartController@chartLine')->name('get-char');
Route::get('chart-line-ajax', 'ChartController@chartLineAjax');

Route::resource('charts', 'ChartController');