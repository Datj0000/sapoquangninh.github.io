<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InfomationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\MetaController;

//Home
Route::get('/',[HomeController::class,'index']);
Route::get('/trang-chu',[HomeController::class,'index']);

//Admin
Route::get('/login-admin',[AdminController::class,'login_admin']);
Route::get('/logout-admin',[AdminController::class,'logout']);
Route::get('/admin',[AdminController::class,'show_admin']);
Route::post('/admin-dashboard',[AdminController::class,'dashboard']);
Route::get('/change-language/{language}',[AdminController::class,'change_language']);

Route::post('/recover-pass',[MailController::class,'recover']);
Route::post('/send-token',[MailController::class,'send_token']);
Route::post('/reset-pass',[AdminController::class,'reset_pass']);
Route::get('/change-pass',[AdminController::class,'change_pass']);
Route::post('/change-new-pass',[AdminController::class,'change_new_pass']);

Route::get('/view-profile',[AdminController::class,'view_profile']);
Route::get('/profile',[AdminController::class,'profile']);
Route::post('/update-profile',[AdminController::class,'update_profile']);

Route::group(['middleware' => 'roles'], function(){
    Route::get('/all-staff',[AdminController::class,'all_staff']);
    Route::get('/fetchdata-user',[AdminController::class,'fetchdata']);
    Route::post('/signup-admin',[AdminController::class,'add_staff']);
    Route::get('/view-role/{admin_id}',[AdminController::class,'view_role']);
    Route::post('/update-staff/{admin_id}',[AdminController::class,'update_staff']);
    Route::get('/delete-staff/{admin_id}',[AdminController::class,'delete_staff']);
});

//Comment
Route::get('/all-comment',[CommentController::class,'all_comment']);
Route::get('/fetchdata-comment',[CommentController::class,'fetchdata']);
Route::get('/view-comment/{comment_id}',[CommentController::class,'view_comment']);
Route::post('/add-comment',[CommentController::class,'add_comment']);
Route::post('/update-comment/{comment_id}',[CommentController::class,'update_comment']);
Route::get('/delete-comment/{comment_id}',[CommentController::class,'delete_comment']);
Route::post('/arrange-comment',[CommentController::class,'arrange_comment']);

//Customer
Route::get('/all-customer',[CustomerController::class,'all_customer']);
Route::get('/fetchdata-customer',[CustomerController::class,'fetchdata']);
Route::get('/view-customer/{customer_id}',[CustomerController::class,'view_customer']);
Route::post('/add-customer',[CustomerController::class,'add_customer']);
Route::post('/update-customer/{customer_id}',[CustomerController::class,'update_customer']);
Route::get('/delete-customer/{customer_id}',[CustomerController::class,'delete_customer']);
Route::post('/arrange-customer',[CustomerController::class,'arrange_customer']);

//Infomation
Route::get('/all-infomation',[InfomationController::class,'all_infomation']);
Route::get('/view-infomation',[InfomationController::class,'view_infomation']);
Route::post('/update-infomation',[InfomationController::class,'update_infomation']);

//Register
Route::get('/all-register',[RegisterController::class,'all_register']);
Route::get('/fetchdata-register',[RegisterController::class,'fetchdata']);
Route::post('/add-register',[RegisterController::class,'add_register']);
Route::get('/delete-register/{register_id}',[RegisterController::class,'delete_register']);
Route::get('/update-register/{register_id}',[RegisterController::class,'update_register']);
Route::group(['middleware' => 'roles'], function(){
    Route::get('/export-excel',[RegisterController::class,'export_excel']);
    Route::post('/import-excel',[RegisterController::class,'import_excel']);
    Route::get('/delete-history',[RegisterController::class,'delete_history']);
    Route::get('/fetchdata-history',[RegisterController::class,'fetchdata_history']);
});

//Mail
Route::get('/send-info-cus/{register_id}',[MailController::class,'send_info_cus']);
Route::group(['middleware' => 'roles'], function(){
    Route::get('/view-email',[MailController::class,'view_email']);
    Route::post('/update-email',[MailController::class,'update_email']);
});

//Product
Route::get('/all-product',[ProductController::class,'all_product']);
Route::get('/fetchdata-product',[ProductController::class,'fetchdata']);
Route::get('/view-product/{product_id}',[ProductController::class,'view_product']);
Route::post('/add-product',[ProductController::class,'add_product']);
Route::post('/update-product/{product_id}',[ProductController::class,'update_product']);
Route::get('/delete-product/{product_id}',[ProductController::class,'delete_product']);
Route::post('/arrange-product',[ProductController::class,'arrange_product']);

//Introduce
Route::get('/all-introduce',[IntroduceController::class,'all_introduce']);
Route::get('/view-introduce',[IntroduceController::class,'view_introduce']);
Route::post('/update-introduce',[IntroduceController::class,'update_introduce']);

Route::get('/fetchdata-gallery',[IntroduceController::class, 'fetchdata']);
Route::post('/insert-gallery',[IntroduceController::class,'insert_gallery']);
Route::post('/update-gallery',[IntroduceController::class,'update_gallery']);
Route::post('/delete-gallery',[IntroduceController::class,'delete_gallery']);
Route::post('/arrange-gallery',[IntroduceController::class,'arrange_gallery']);

//Meta
Route::get('/all-meta',[MetaController::class,'all_meta']);
Route::get('/view-meta',[MetaController::class,'view_meta']);
Route::post('/update-meta',[MetaController::class,'update_meta']);
