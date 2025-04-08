<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Jasacontroller;
use App\Http\Controllers\HomeController;


// Halaman Utama
Route::get('/', [HomeController::class, 'index']);


// Dashboard User
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Rute untuk profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Middleware untuk Admin
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
        Route::resource('/products', ProductController::class)->names([
            'index'   => 'admin.products.index',
            'create'  => 'admin.products.create',
            'store'   => 'admin.products.store',
            'show'    => 'admin.products.show',
            'edit'    => 'admin.products.edit',
            'update'  => 'admin.products.update',
            'destroy' => 'admin.products.destroy',
        ]);
        // Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
        // Route::get('/settings/edit', [SettingController::class, 'edit'])->name('settings.edit');
        // Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');

      
        Route::resource('/admins', AdminController::class)->except(['show'])->names([
          'index'   => 'admin.admins.index',
          'create'  => 'admin.admins.create',
          'store'   => 'admin.admins.store',
          'edit'    => 'admin.admins.edit',
          'update'  => 'admin.admins.update',
          'destroy' => 'admin.admins.destroy',
      ]);
       Route::resource('/jasas', JasaController::class)->names([
        'index'   => 'admin.jasa.index',
        'create'  => 'admin.jasa.create',
        'store'   => 'admin.jasa.store',
        'edit'    => 'admin.jasa.edit',
        'update'  => 'admin.jasa.update',
        'destroy' => 'admin.jasa.destroy',
    ]);
    });
    
    });
    

    
    

    // Pengaturan Admin

// File autentikasi (Login, Register, dll.)
require __DIR__.'/auth.php';

// use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\SettingController;
// use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\AdminMiddleware;
// use App\Http\Controllers\WebsiteController;

// Route::get('/', [WebsiteController::class, 'home'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


// Route::middleware(['auth', AdminMiddleware::class])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
    
//     Route::resource('/admin/products', ProductController::class);
//     Route::middleware(['auth', 'admin'])->group(function () {
//         Route::get('/admin/settings', [SettingController::class, 'edit'])->name('settings.edit');
//         Route::post('/admin/settings', [SettingController::class, 'update'])->name('settings.update');
//     });
// });

// require __DIR__.'/auth.php';
