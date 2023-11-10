<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','role:user', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::prefix('admin')->group(function(){
//     Route::controller(AdminController::class)->group(function(){
//         Route::get('/','index');
//     });
// });

Route::prefix('admin')->middleware(['auth','role:administrator'])->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::get('/dashboard','index')->name('admin.dashboard');



        // Sub Category
        Route::get('/subcategory/dashboard', 'subCategoryDashboard')->name('admin.subcategory.dashboard');
        Route::get('/subcategory/add', 'addSubCategoryDashboard')->name('admin.subcategory.add');

        // Product
        Route::get('/product/dashboard', 'productDashboard')->name('admin.product.dashboard');
        Route::get('/product/add', 'allProductDashboard')->name('admin.product.add');

        // Order
        Route::get('/order/dashboard', 'orderDashboard')->name('admin.order.dashboard');
        Route::get('/order/pending', 'pendingOrderDashboard')->name('admin.order.pending');
    });

    Route::controller(CategoryController::class)->group(function(){
        // Category
        Route::get('/category/dashboard', 'categoryDashboard')->name('admin.category.dashboard');
        Route::get('/category/add', 'addCategoryDashboard')->name('admin.category.add');

        Route::post('/categories/store', 'categoryStore')->name('admin.category.store');
        Route::get('/categories/{category}/edit',  'categoryEdit')->name('admin.categories.edit');
        Route::delete('/categories/{category}', 'categoryDestroy')->name('admin.categories.destroy');

    });
});


require __DIR__.'/auth.php';
