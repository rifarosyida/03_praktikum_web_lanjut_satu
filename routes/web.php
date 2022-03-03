<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ControllerAboutUs;
use App\Http\Controllers\ControllerNews;
use App\Http\Controllers\ControllerProduct;
use App\Http\Controllers\ControllerProgram;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//1. Halaman Home 
 Route::get('/home',  [HomeController::class, 'home']);
// //2. Halaman Products (route prefix)
Route::prefix('product')->group(function(){
    Route::get('/product1',  [ControllerProduct::class, 'product1']);
    Route::get('/product2',  [ControllerProduct::class, 'product2']);
});
// //3. Halaman News (route param)
Route::get('/news/{id}', [ControllerNews::class, 'index']);

// //4. Halaman Program (route prefix) 
Route::prefix("program")->group(function(){
     Route::get('/program1',[ControllerProgram::class,'program1']);
     Route::get('/program2',[ControllerProgram::class,'program2']);
});
// //5. Halaman About Us(route biasa)
 Route::get('/about-us', [ControllerAboutUs::class, 'index']);
// //6. Halaman Contact Us (route resource only)
Route::resource('/contact-us', ContactController::class, [
        'only' => ['index', 'create', 'store']
    ]);
