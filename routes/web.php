<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard\AdminDashboard;
use App\Livewire\Dashboard\CashierDashboard;
use App\Livewire\Dashboard\NurseDashboard;
use App\Livewire\Dashboard\PathologistDashboard;
use App\Livewire\Dashboard\PharmacistDashboard;
use App\Livewire\Dashboard\ReceptionistDashboard;
use App\Livewire\Dashboard\StoresClerkDashboard;
use Illuminate\Support\Facades\Route;








Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/receptionist/dashboard', ReceptionistDashboard::class)->name('receptionist.dashboard');
    Route::get('/nurse/dashboard', NurseDashboard::class)->name('nurse.dashboard');
    Route::get('/pathologist/dashboard', PathologistDashboard::class)->name('pathologist.dashboard');
    Route::get('/storesclerk/dashboard', StoresClerkDashboard::class)->name('storesclerk.dashboard');
    Route::get('/pharmacist/dashboard', PharmacistDashboard::class)->name('pharmacist.dashboard');
    Route::get('/cashier/dashboard', CashierDashboard::class)->name('cashier.dashboard');
});

require __DIR__ . '/auth.php';
