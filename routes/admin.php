<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
Route::middleware(['admin'])->group(function(){
  
Route::get('admindashboard', [AdminController::class, 'admindashboard'])->name('Admin.Dashboard');
Route::get('AdminUserlist',[UserController::class,'AdminUserlist'])->name('Admin.AdminUserlist');

Route::get('Adminproduct',[ProductController::class,'Adminproduct'])->name('Admin.Adminproduct');
Route::post('Addproduct',[ProductController::class,'Addproduct'])->name('Admin.Addproduct');

Route::post('Active',[ProductController::class,'Active'])->name('Admin.Active');
Route::get('InActive/{id}',[ProductController::class,'InActive'])->name('Admin.InActive');

Route::get('delete/{id}',[ProductController::class,'delete'])->name('Admin.delete');

Route::post('Editproduct',[ProductController::class,'Editproduct'])->name('Admin.Editproduct');
Route::post('ProductUpdate',[ProductController::class,'ProductUpdate'])->name('Admin.ProductUpdate');

});

  
// Route::get('logout', [AdminController::class, 'logout'])->name('logout');
