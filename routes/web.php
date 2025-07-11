<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\BookmarkController;
use App\Models\Material;
use App\Models\Module;
use App\Models\Category;

Route::get('/', function () {
    $deskripsi = "adalah platform belajar daring yang dirancang khusus untuk membantu pemula dalam 
    mempelajari pemrograman. Kami menyediakan berbagai materi dan sumber daya yang
    dirancang secara khusus untuk memandu pengguna dari tingkat dasar hingga kemampuan
    yang lebih tinggi dalam pemrograman.";
    
    $module = Module::paginate(8);

    return view('home', compact('deskripsi', 'module'));
});
// CATEGORIES
Route::get('/category/{category}', function (Category $category) {
    $modules = $category->modules;
    return view('category_modules', compact('modules', 'category'));
})->name('modules.byCategory');

// MODULES
Route::get('/module', function () {

    $module = Module::all();

    return view('module', compact('module'));
});

// MATERIALS
Route::get('/material/{module}', function (Module $module) {
    $materials = $module->materials; // relasi dari model
    return view('material', compact('materials', 'module'));
})->name('material.byModule');

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

Route::prefix('user')->middleware(['auth', 'user'])->group(function () {
    Route::get('userprofile', [AuthController::class, 'userProfile'])->name('userprofile');
});


Route::prefix('admin')->middleware('auth','admin')->group(function () {
    Route::get('dashboard', function () {
        $module = Module::all();
        $material = Material::all();
        return view('admin.dashboard.dashboard', compact('module', 'material'));
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

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->middleware('auth')->name('profile');

});

Route::middleware('auth')->group(function () {
    Route::post('/bookmark/{module_id}', [BookmarkController::class, 'store'])->name('bookmark.add');
    Route::delete('/bookmark/{id}', [BookmarkController::class, 'destroy'])->name('bookmark.remove');
});

