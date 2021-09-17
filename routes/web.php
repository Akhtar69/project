<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\viewcontroller;
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
    return view('index');
});
Route::get('chartsvieew',[viewcontroller::class,'viewcharts']);
Route::get('index2vieew',[viewcontroller::class,'indexview']);

Route::get('citySubmitForm',[CityController::class,'create']);
Route::post('cityDatabase',[CityController::class,'store'])->name('submitCity');

Route::get('publisherData',[PublisherController::class,'create']);
Route::post('publisherDatabase',[PublisherController::class,'store'])->name('submitPublisher');

Route::get('authorName',[AuthorController::class,'create']);
Route::post('authorData',[AuthorController::class,'store'])->name('submitAuthor');

Route::get('customerBookData',[CustomerController::class,'create']);
Route::post('customerDataToDatabase',[CustomerController::class,'store'])->name('submitCustomer');

Route::get('bookData',[BookController::class,'create']);
Route::post('bookSubmit',[BookController::class,'store'])->name('submitBook');

Route::get('bookingData', [BookingController::class, 'create']);
Route::post('submitData', [BookingController::class, 'store'])->name('bookingSubmit');

Route::get('viewDataFromDatabase',[BookingController::class,'show'])->name('showLibraryData');

Route::get('formWizard',[viewcontroller::class,'formWizardview']);

Route::get('edit/{id}',[BookingController::class,'edit']);
Route::post('update',[BookingController::class,'update'])->name('updateLibraryData');

Route::get('delete/{id}',[BookingController::class,'destroy']);

