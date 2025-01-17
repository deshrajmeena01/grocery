<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ShopController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserCartController;

require base_path('routes/admin.php');

Route::get('/',[dashboardcontroller::class,'dashboard'])->name('dashboard');

Route::get('Register',[AuthController::class,'Register'])->name('User.Register');
Route::post('UserRegister',[AuthController::class,'UserRegister'])->name('User.UserRegister');

Route::get('login',[AuthController::class,'Login'])->name('User.Login');
Route::post('login',[AuthController::class,'userLogin'])->name('userLogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('Shop',[ShopController::class,'Shop'])->name('User.Shop');
Route::get('shinglproduct/{id}',[ShopController::class, 'shinglproduct'])->name('shinglproduct');


Route::middleware(['User'])->group(function(){
    Route::get('Shop',[ShopController::class,'Shop'])->name('User.Shop');
    Route::post('Addcart', [UserCartController::class,'Addcart'])->name('Addcart');
    Route::post('productdesc', [UserCartController::class,'productdesc'])->name('productdesc');
    Route::post('productInc', [UserCartController::class,'productInc'])->name('productInc'); 

    Route::post('deletecart', [UserCartController::class,'deletecart'])->name('deletecart');
    Route::get('Checkout', [UserCartController::class,'Checkout'])->name('Checkout');

    route::post('primary_mobile_update',[UserCartController::class,'primary_mobile_update'])->name('User.primary_mobile_update');
    route::post('secondary_mobile_update',[UserCartController::class,'secondary_mobile_update'])->name('User.secondary_mobile_update');

    Route::post('Address', [UserCartController::class,'Address'])->name('Address');



    

});





