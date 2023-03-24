<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\ManageBookings;
use App\Http\Livewire\Admin\ManageBuses;
use App\Http\Livewire\Admin\ManageCustomers;
use App\Http\Livewire\Admin\ManagePayments;
use App\Http\Livewire\Admin\ManageRoutes;
use App\Http\Livewire\Admin\ManageSchedules;
use App\Http\Livewire\Admin\ManageSeats;
use App\Http\Livewire\Admin\Overview;
use App\Http\Livewire\Admin\Profile;
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
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', Overview::class)->name('admin-dashboard');
    Route::get('/profile', Profile::class)->name('admin-profile');
    Route::get('/routes', ManageRoutes::class)->name('admin-routes');
    Route::get('/buses', ManageBuses::class)->name('admin-buses');
    Route::get('/bookings', ManageBookings::class)->name('admin-bookings');
    Route::get('/seats', ManageSeats::class)->name('admin-seats');
    Route::get('/payments', ManagePayments::class)->name('admin-payments');
    Route::get('/bus-schedule', ManageSchedules::class)->name('admin-schedules');
    Route::get('/customers', ManageCustomers::class)->name('admin-customers');
});

Route::middleware(['auth', 'role:customer'])->prefix('customer')->group(function () {
    Route::get('/dashboard', Overview::class)->name('customer-dashboard');
});

require __DIR__ . '/auth.php';
