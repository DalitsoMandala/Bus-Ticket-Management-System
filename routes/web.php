<?php

use Carbon\Carbon;
use App\Models\Bus;
use App\Models\Seat;
use App\Models\Customer;
use App\Models\BookedBus;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use App\Http\Livewire\Admin\BookBus;
use App\Http\Livewire\Admin\Payment;
use App\Http\Livewire\Admin\Profile;
use App\Http\Livewire\Admin\Overview;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Customer\Refunds;
use App\Http\Controllers\TestController;
use App\Http\Livewire\Admin\ManageBuses;
use App\Http\Livewire\Admin\ManageSeats;
use App\Http\Livewire\Admin\ManageRoutes;
use App\Http\Livewire\Customer\Schedules;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\ManageBookings;
use App\Http\Livewire\Admin\ManagePayments;
use App\Http\Livewire\Admin\ManageCustomers;
use App\Http\Livewire\Admin\ManageSchedules;
use App\Http\Livewire\Customer\CancelBooking;
use App\Http\Livewire\Customer\CustomerOverview;
use App\Http\Livewire\Customer\BookBus as CustomerBookBus;
use App\Http\Livewire\Customer\Profile as CustomerProfile;

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
})->name('home');



Route::get('/test', [TestController::class, 'changed']);
Route::get('/dashboard', function () {
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
    Route::get('/bookings/book-a-bus', BookBus::class)->name('admin-book-bus');
    Route::get('/seats', ManageSeats::class)->name('admin-seats');
    Route::get('/payments', ManagePayments::class)->name('admin-payments');
    Route::get('/bus-schedule', ManageSchedules::class)->name('admin-schedules');
    Route::get('/customers', ManageCustomers::class)->name('admin-customers');
    Route::get('/payment/{id}', Payment::class)->name('admin-payment');
});




Route::middleware(['auth', 'role:customer'])->prefix('customer')->group(function () {
    Route::get('/dashboard', CustomerOverview::class)->name('customer-dashboard');
    Route::get('/profile', CustomerProfile::class)->name('customer-profile');
    Route::get('/schedules', Schedules::class)->name('customer-schedules');
    Route::get('/refunds', Refunds::class)->name('customer-refunds');
    Route::get('/book-a-bus', CustomerBookBus::class)->name('customer-book-a-bus');
    Route::get('/cancel-booking', CancelBooking::class)->name('customer-cancel-booking');
    Route::get('/receipt', function () {
        return view('mail.booking-receipt', [
            'data' => [
                'ticket_no' => 'WIOERF23344',
                'seat_no' => 23,
                'payment_date' => Carbon::parse(date('Y-m-d'))->format('d/m/Y'),
                'client' => 'John Doe',
                'payment_to' => config('app.name'),
                'description' => 'Booking ticket',
                'amount' => '$45.00',
                'sub_total' => '$45.00',
                'total_amount' => '$45.00',
                'customer_phone_number' => '+26599339393',
                'customer_email' => 'dalitso@gmail.com',
                'company_email' => config('mail.from.address'),

            ]
        ]);
    })->name('mail');
});

require __DIR__ . '/auth.php';
