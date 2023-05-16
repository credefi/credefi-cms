<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 

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

Route::get('/', 'HomeController@index');
Route::get('/articles', 'ArticleController@index');
Route::get('/article/{id}', 'ArticleController@post');

Route::get('/TVL', 'ApiController@tvl');
Route::get('/CreditOutstanding', 'ApiController@credit_outstanding');
Route::get('/Interest-repaid', 'ApiController@interest_repaid');
Route::get('/delinquency1', 'ApiController@delinquency1');
Route::get('/delinquency1', 'ApiController@delinquency2');
Route::get('/delinquency1', 'ApiController@delinquency3');
Route::get('/delinquency1', 'ApiController@delinquency4');
Route::get('/total-repaid', 'ApiController@total_repaid');
Route::get('/expositions-completed', 'ApiController@expositions_completed');
Route::get('/tvl-growth', 'ApiController@tvl_growth');
Route::get('/totalsupply', 'ApiController@total_supply');
Route::get('/circulationsupply', 'ApiController@circulation_supply');
Route::get('/Total-fees', 'ApiController@total_fees');
Route::get('/Average-APY', 'ApiController@average_apy');
Route::get('/Rewards-APY', 'ApiController@rewards_apy');
Route::get('/total-defaults', 'ApiController@total_defaults');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
