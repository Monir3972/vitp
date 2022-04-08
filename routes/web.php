<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\counterController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\livedataController;
use App\Http\Controllers\pacakgeController;
use App\Http\Controllers\rivewController;


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

// Route::get('/', function () {
//     $data['logo'] =Logo::first();
//     return view('frontend.home',$data);
// });

 Route::get('/', [frontendController::class, 'index'])->name('frontend');

 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// usign group routes

Route::prefix('users')->group(function(){
    Route::get('/view', [UserController::class, 'userview'])->name('userview')->Middleware('test');
    Route::get('/add', [UserController::class, 'add'])->name('users.add');
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('users.delete');
   
});

Route::prefix('profiles')->group(function(){
    Route::get('/view', [ProfileController::class, 'view'])->name('profiles.view');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
    Route::post('/store', [ProfileController::class, 'update'])->name('profiles.update');
    Route::get('/password/change', [ProfileController::class, 'changepassword'])->name('profiles.changepassword');
    Route::post('/password/Update', [ProfileController::class, 'passwordUpdate'])->name('profiles.passwordUpdate');
});

Route::prefix('employee')->group(function(){
    Route::get('/view', [employeeController::class, 'userview'])->name('employee.view');
    Route::get('/add', [employeeController::class, 'add'])->name('employee.add');
    Route::post('/store', [employeeController::class, 'store'])->name('employee.store');
    Route::get('/edit/{id}', [employeeController::class, 'edit'])->name('employee.edit');
    Route::post('/update/{id}', [employeeController::class, 'update'])->name('employee.update');
    Route::get('/delete/{id}', [employeeController::class, 'delete'])->name('employee.delete');
});

Route::prefix('logos')->group(function(){
    Route::get('/view', [LogoController::class, 'userview'])->name('logos.view');
    Route::get('/add', [LogoController::class, 'add'])->name('logos.add');
    Route::post('/store', [LogoController::class, 'store'])->name('logos.store');
    Route::get('/edit/{id}', [LogoController::class, 'edit'])->name('logos.edit');
    Route::post('/update/{id}', [LogoController::class, 'update'])->name('logos.update');
    Route::get('/delete/{id}', [LogoController::class, 'delete'])->name('logos.delete');
});

Route::prefix('sliders')->group(function(){
    Route::get('/view', [SliderController::class, 'userview'])->name('sliders.view');
    Route::get('/add', [SliderController::class, 'add'])->name('sliders.add');
    Route::post('/store', [SliderController::class, 'store'])->name('sliders.store');
    Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('sliders.edit');
    Route::post('/update/{id}', [SliderController::class, 'update'])->name('sliders.update');
    Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('sliders.delete');
});

Route::prefix('about')->group(function(){
    Route::get('/view', [aboutController::class, 'userview'])->name('about.view');
    Route::get('/add', [aboutController::class, 'add'])->name('about.add');
    Route::post('/store', [aboutController::class, 'store'])->name('about.store');
    Route::get('/edit/{id}', [aboutController::class, 'edit'])->name('about.edit');
    Route::post('/update/{id}', [aboutController::class, 'update'])->name('about.update');
    Route::get('/delete/{id}', [aboutController::class, 'delete'])->name('about.delete');
});

Route::prefix('services')->group(function(){
    Route::get('/view', [serviceController::class, 'userview'])->name('services.view');
    Route::get('/add', [serviceController::class, 'add'])->name('services.add');
    Route::post('/store', [serviceController::class, 'store'])->name('services.store');
    Route::get('/edit/{id}', [serviceController::class, 'edit'])->name('services.edit');
    Route::post('/update/{id}', [serviceController::class, 'update'])->name('services.update');
    Route::get('/delete/{id}', [serviceController::class, 'delete'])->name('services.delete');
});

Route::prefix('counters')->group(function(){
    Route::get('/view', [counterController::class, 'userview'])->name('counters.view');
    Route::get('/add', [counterController::class, 'add'])->name('counters.add');
    Route::post('/store', [counterController::class, 'store'])->name('counters.store');
    Route::get('/edit/{id}', [counterController::class, 'edit'])->name('counters.edit');
    Route::post('/update/{id}', [counterController::class, 'update'])->name('counters.update');
    Route::get('/delete/{id}', [counterController::class, 'delete'])->name('counters.delete');
});
Route::prefix('portfolios')->group(function(){
    Route::get('/view', [portfolioController::class, 'userview'])->name('portfolios.view');
    Route::get('/add', [portfolioController::class, 'add'])->name('portfolios.add');
    Route::post('/store', [portfolioController::class, 'store'])->name('portfolios.store');
    Route::get('/edit/{id}', [portfolioController::class, 'edit'])->name('portfolios.edit');
    Route::post('/update/{id}', [portfolioController::class, 'update'])->name('portfolios.update');
    Route::get('/delete/{id}', [portfolioController::class, 'delete'])->name('portfolios.delete');
});

Route::prefix('clients')->group(function(){
    Route::get('/view', [rivewController::class, 'userview'])->name('clients.view');
    Route::get('/add', [rivewController::class, 'add'])->name('clients.add');
    Route::post('/store', [rivewController::class, 'store'])->name('clients.store');
    Route::get('/edit/{id}', [rivewController::class, 'edit'])->name('clients.edit');
    Route::post('/update/{id}', [rivewController::class, 'update'])->name('clients.update');
    Route::get('/delete/{id}', [rivewController::class, 'delete'])->name('clients.delete');
});

Route::prefix('pacakges')->group(function(){
    Route::get('/view', [pacakgeController::class, 'userview'])->name('pacakges.view');
    Route::get('/add', [pacakgeController::class, 'add'])->name('pacakges.add');
    Route::post('/store', [pacakgeController::class, 'store'])->name('pacakges.store');
    Route::get('/edit/{id}', [pacakgeController::class, 'edit'])->name('pacakges.edit');
    Route::post('/update/{id}', [pacakgeController::class, 'update'])->name('pacakges.update');
    Route::get('/delete/{id}', [pacakgeController::class, 'delete'])->name('pacakges.delete');
});


Route::get('/livetable', 'livedataController@index');
Route::get('/livetable/fetch_data', 'livedataController@fetch_data');
Route::post('/livetable/add_data', 'livedataController@add_data')->name('livetable.add_data');
Route::post('/livetable/update_data', 'livedataController@update_data')->name('livetable.update_data');
Route::post('/livetable/delete_data', 'livedataController@delete_data')->name('livetable.delete_data');
