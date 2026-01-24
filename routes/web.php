<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Dashboard\AdminDashboard;
use App\Livewire\Dashboard\NurseDashboard;
use App\Http\Controllers\ProfileController;
use App\Livewire\Pages\RegisterPatientPage;
use App\Livewire\Components\RegisterPatient;
use App\Livewire\Dashboard\CashierDashboard;
use App\Livewire\Dashboard\PharmacistDashboard;
use App\Livewire\Dashboard\PathologistDashboard;
use App\Livewire\Dashboard\StoresClerkDashboard;
use App\Livewire\Dashboard\ReceptionistDashboard;
use App\Livewire\Pages\QueueManagementPage;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    //Dashboards
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/receptionist/dashboard', ReceptionistDashboard::class)->name('receptionist.dashboard');
    Route::get('/nurse/dashboard', NurseDashboard::class)->name('nurse.dashboard');
    Route::get('/pathologist/dashboard', PathologistDashboard::class)->name('pathologist.dashboard');
    Route::get('/storesclerk/dashboard', StoresClerkDashboard::class)->name('storesclerk.dashboard');
    Route::get('/pharmacist/dashboard', PharmacistDashboard::class)->name('pharmacist.dashboard');
    Route::get('/cashier/dashboard', CashierDashboard::class)->name('cashier.dashboard');
});


Route::middleware(['auth', 'role:receptionist'])->group(function () {
    $role = 'receptionist';
    Route::get("/$role/register-patient", RegisterPatientPage::class)->name("" . $role . ".register-patient");
    Route::get("/$role/queue-management", QueueManagementPage::class)->name("" . $role . ".queue-management");
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    $role = 'admin';
    Route::get("/$role/register-patient", RegisterPatientPage::class)->name("" . $role . ".register-patient");
    Route::get("/$role/queue-management", QueueManagementPage::class)->name("" . $role . ".queue-management");
});
require __DIR__ . '/auth.php';
