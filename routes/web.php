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

Route::get('/', [
  'uses' => 'productsController@getIndex',
  'as' => 'products.index'
]);

Route::get('/add-to-cart/{id}', [
  'uses' => 'productsController@getAddToCart',
  'as' => 'product.AddToCart'
]);

Route::get('/add-to-cart', [
  'uses' => 'productsController@getCart',
  'as' => 'product.shoppingCart'
]);

Route::get('/checkout', [
  'uses' => 'productsController@getCheckout',
  'as' => 'checkout'
]);

Route::group(['prefix' => 'user'], function(){

  Route::group(['middleware' => 'guest'], function(){

  Route::get('/signup', [
  'uses' => 'userController@getSignup',
  'as' => 'user.signup'
]);

Route::post('/signup', [
  'uses' => 'userController@postSignup',
  'as' => 'user.signup'
]);

Route::get('/signin', [
  'uses' => 'userController@getSignin',
  'as' => 'user.signin'
]);

Route::post('/signin', [
  'uses' => 'userController@postSignin',
  'as' => 'user.signin'
]);

});

  Route::group(['middleware' => 'auth'], function(){

Route::get('/profile', [
  'uses' => 'userController@getProfile',
  'as' => 'user.profile'
]);

Route::get('/logout', [
  'uses' => 'userController@getLogout',
  'as' => 'user.logout'
]);

});

});

