<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\backendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminViewController;
use App\Http\Controllers\postController;
use App\Http\Controllers\newsController;


Route::get('/', [frontendController::class, 'front']);
Route::get('/backend', [backendController::class, 'backend']);

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);


Route::get('register', [RegistrationController::class, 'index']);
Route::post('register', [RegistrationController::class, 'store']);


//Route::middleware('auth')->group(function(){


// Route::get('test',function(){
//     if(Auth::check()){
//         return "AUTHENTICATED";
//     }else{
//         return "please login";

//     }
//     });



Route::get('posts', [postController::class,'index']);
Route::post('post', [postController::class,'store']);
Route::get('deletePost/{id}', [postController::class,'delete']);
Route::get('editPost/{id}', [postController::class,'preview']);
Route::post('editPost',[postController::class,'edit']);



Route::get('news', [newsController::class,'index']);
Route::post('news', [newsController::class,'store']);



Route::get('admin', function () {
    return "welcome to admin";
});

Route::get('dashboard', function () {
    return "welcome to dashboard";
});
Route::get('update', function () {
    return "welcome to update";
});

// Route::get('posts', function () {
//     return "welcome to posts";
// });




//});
