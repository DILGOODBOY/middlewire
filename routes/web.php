<?php
/*
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'admin'])->group(
    function () {
        Route::get('/admin', function () {
            return view('admin.index');
        });
    }
);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('admin/', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('admin/menu', App\Livewire\Admin\Menu::class)->name('admin.menu');
Route::get('admin/pesanan', App\Livewire\Admin\Pesanan::class)->name('admin.pesanan');
Route::get('admin/pesananditerima', App\Livewire\Admin\PesananDiterima::class)->name('admin.pesananditerima');

