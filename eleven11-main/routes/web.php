<?php

use App\Http\Controllers\Admin\AdminController as AdminAdminController;
use App\Http\Controllers\Admin\PropertiesController as AdminPropertiesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Website\PropertiesController;
use App\Http\Controllers\Website\UserController as WebsiteUserController;

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

Route::get('/hello', function () {
    return view('welcome');
});


Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin');


Route::get('/admin/project', function () {
    return view('admin.project');
});

Route::get('/admin/project/create', function () {
    return view('admin.projects.create');
});

Route::get('/admin/feature', function () {
    return view('admin.feature');
});

Route::get('/admin/feature/create', function () {
    return view('admin.feature.create');
});

Route::get('/admin/facilities', function () {
    return view('admin.facilities');
});


Route::get('/admin/facilities/create', function () {
    return view('admin.facilities.create');
});


Route::get('/admin/investors', function () {
    return view('admin.investors');
});

Route::get('/admin/investors/create', function () {
    return view('admin.investors.create');
});

Route::get('/admin/category', function () {
    return view('admin.category');
});

Route::get('/admin/reviews', function () {
    return view('admin.reviews');
});

Route::get('/admin/invoice', function () {
    return view('admin.invoice');
});

Route::get('/admin/custom-field', function () {
    return view('admin.custom');
});

Route::get('/admin/custom-field/create', function () {
    return view('admin.custom.create');
});

Route::get('admin/pages', function () {
    return view('admin.pages');
});

Route::get('admin/consults', function () {
    return view('admin.consults.index');
});

Route::get('admin/accounts', function () {
    return view('admin.accounts');
});

Route::get('admin/accounts/create', function () {
    return view('admin.accounts.create');
});



Route::get('admin/contact', function () {
    return view('admin.contact');
});

Route::get('admin/faq-category', function () {
    return view('admin.faq-category');
});

Route::get('admin/faq', function () {
    return view('admin.faq');
});

Route::get('admin/faq/create', function () {
    return view('admin.faq.create');
});

Route::get('admin/faq-category/create', function () {
    return view('admin.faq.create');
});

Route::get('admin/newsletter', function () {
    return view('admin.newsletter');
});

Route::get('admin/packages', function () {
    return view('admin.packages');
});

Route::get('admin/packages/create', function () {
    return view('admin.packages.create');
});

Route::get('admin/post', function () {
    return view('admin.post');
});

Route::get('admin/blogs/create', function () {
    return view('admin.blogs.create');
});

Route::get('admin/tags', function () {
    return view('admin.tags');
});

Route::get('admin/tags/create', function () {
    return view('admin.blogs.tags.tag');
});

Route::get('admin/category/create', function () {
    return view('admin.category.create');
});

Route::get('admin/testimonial', function () {
    return view('admin.testimonial');
});

Route::get('admin/testimonial/create', function () {
    return view('admin.testimonial.create');
});

Route::get('admin/transaction', function () {
    return view('admin.transaction');
});

Route::get('admin/coupons', function () {
    return view('admin.coupons.index');
});

Route::get('admin/coupons/create', function () {
    return view('admin.coupons.create');
});

Route::get('users/dashboard', function () {
    return view('users.dashboard');
});

Route::get('users/settings', function () {
    return view('users.website.settings');
});

Route::get('users/invoices', function () {
    return view('users.website.invoices.index');
});

Route::get('users/consults', function () {
    return view('users.website.consults');
});

Route::get('users/properties/create', function () {
    return view('users.website.properties.create');
});




// User sign up routes
Route::view('/', 'users.login')->name('login');
Route::post('/verify-user', [WebsiteUserController::class, 'verifyUser'])->name('verify.user');
Route::view('/register', 'users.register')->name('user.registration');
Route::post('/add-user', [WebsiteUserController::class, 'addUser'])->name('add.user');
Route::group(['prefix' => '/user', 'middleware' => 'auth'], function() {
    Route::get('/dashboard', [WebsiteUserController::class,'dashboard'])->name('user.dashboard');
    Route::get('/logout', [WebsiteUserController::class, 'userLogout'])->name('user.logout');
    //Properties
    Route::get('/properties', [PropertiesController::class, 'properties'])->name('user.properties');
});

Route::view('/admin/login', 'login')->name('admin.login');
Route::post('/verify-admin', [AdminAdminController::class, 'verifyAdmin'])->name('verify.admin');

Route::group(['prefix' => '/admin', 'middleware' => 'IsAdmin'], function() {
    Route::get('/dashboard', [AdminAdminController::class, 'dashboard'])->name('admin.dashboard');

    //Properties
    Route::group(['prefix' => '/real-estate'], function(){
        Route::view('/properties', 'admin.properties.index')->name('admin.realestate');
        Route::view('/properties/create', 'admin.properties.create')->name('admin.properties.create');
    });
});