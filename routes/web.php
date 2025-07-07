<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ModuleController;
use App\Models\Module;

Route::get('/', function () {
    $deskripsi = "adalah platform belajar daring yang dirancang khusus untuk membantu pemula dalam 
    mempelajari pemrograman. Kami menyediakan berbagai materi dan sumber daya yang
    dirancang secara khusus untuk memandu pengguna dari tingkat dasar hingga kemampuan
    yang lebih tinggi dalam pemrograman.";
    
    $module = Module::paginate(16);

    return view('home', compact('deskripsi', 'module'));
});

Route::get('/module', function () {

    $module = Module::all();

    return view('module', compact('module'));
});

Route::get('/category', function () {
    return view('category');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        $module = Module::all();
        return view('admin.dashboard.dashboard', compact('module'));
    })->name('dashboard');

    Route::controller(ModuleController::class)->prefix('modules')->group(function () {
        Route::get('', 'index')->name('modules');
        Route::get('create', 'create')->name('modules.create');
        Route::post('store', 'store')->name('modules.store');
        Route::get('show/{id}', 'show')->name('modules.show');
        Route::get('edit/{id}', 'edit')->name('modules.edit');
        Route::put('edit/{id}', 'update')->name('modules.update');
        Route::delete('destroy/{id}', 'destroy')->name('modules.destroy');
    });

    Route::controller(MaterialController::class)->prefix('materials')->group(function () {
        Route::get('', 'index')->name('materials');
        Route::get('create', 'create')->name('materials.create');
        Route::post('store', 'store')->name('materials.store');
        Route::get('show/{id}', 'show')->name('materials.show');
        Route::get('edit/{id}', 'edit')->name('materials.edit');
        Route::put('edit/{id}', 'update')->name('materials.update');
        Route::delete('destroy/{id}', 'destroy')->name('materials.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

});
