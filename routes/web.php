<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutCompanyController;
use App\Http\Controllers\Sejarah\SejarahController;
use App\Http\Controllers\TestimoniController;

// use App\Http\Controllers\AdminController;

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





Route::get('/', [LandingController::class, 'index'])->name('landing');

// About Us :
Route::resource('sejarah', SejarahController::class);

// Visi & Misi
Route::get("/visi-misi", function(){
   return view('content.visimisi');
})->name('visi-misi.index');

// Visi & Misi
Route::get("/contact", function(){
   return view('content.contact');
})->name('contact.index');

// Produk
Route::get("/produk", function(){
    $products = Product::orderBy('id', 'DESC')->get();
   return view('content.product', [
    'products' => $products
   ]);
})->name('produk.index');

Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('product.show');

// Review
Route::resource('review', TestimoniController::class);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');


Route::middleware('auth')->group(function() {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // About Company :
    Route::resource('about-company', AboutCompanyController::class);



    //ADMIN
    Route::middleware('role:Admin')->group(function() {
        //Slider
        Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
        Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
        Route::post('/slider', [SliderController::class, 'store'])->name('slider.store');
        Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
        Route::put('/slider/{id}', [SliderController::class, 'update'])->name('slider.update');
        Route::delete('/slider/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');
        // Route::get('/slider/edit/{id}',[SliderController::class,'edit']) -> name('slider.status');
    });

    // //staff
    // Route::middleware('role:Admin')->group(function() {
    //     //Slider
    //     Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    //     Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    //     Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
    //     Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    //     Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
    //     Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    //     Route::get('/admin/edit/{id}',[AdminController::class,'edit']) -> name('admin.status');
    // });


    //STAFF & ADMIN
    Route::middleware('role:Admin|Staff')->group(function() {
        //Brand
        Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');
        Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
        Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
        Route::post('/brand', [BrandController::class, 'store'])->name('brand.store');
        Route::put('/brand/{id}', [BrandController::class, 'update'])->name('brand.update');
        Route::delete('/brand/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
    });



    //STAFF & ADMIN
    Route::middleware('role:Admin|Staff')->group(function() {
        //Category
        Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });



    //STAFF, ADMIN, CUSTOMER
    //Product
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');

    Route::middleware('role:Admin|Staff')->group(function() {
        Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    });

    //Product Show
    // Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('product.show');





    //ADMIN
    Route::middleware('role:Admin')->group(function() {
        //User
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user', [UserController::class, 'store'])->name('user.store');
        Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

        //Role
        Route::get('/role', [RoleController::class, 'index'])->name('role.index');
        Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
        Route::post('/role', [RoleController::class, 'store'])->name('role.store');
        Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
        Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update');
        Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');
    });


});

