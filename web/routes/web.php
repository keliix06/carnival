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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('participants', 'ParticipantsController');
Route::resource('items', 'ItemsController');
Route::resource('winners', 'WinnersController');
Route::resource('donors', 'DonorsController');

Route::get('/email', 'EmailController')->name('admin.emails.confirm');
Route::get('/email/send', 'EmailSendController')->name('admin.emails.send');

Route::get('/admin/printout', 'Admin\Printout')->name('admin.printout');
Route::get('/admin/auction-sheets', 'Admin\AuctionSheets')->name('admin.auction-sheets');
Route::get('/admin/report', 'Admin\Reports\Money')->name('admin.reports.money');
