<?php

use Carbon\Carbon;
use App\Models\Bus;
use App\Models\Seat;
use App\Models\BusRoute;
use App\Models\Customer;
use App\Models\BookedBus;
use App\Mail\OrderShipped;
use Illuminate\Support\Str;
use App\Mail\BookingReceipt;
use App\Http\Livewire\PaymentPage;
use Illuminate\Support\Facades\URL;
use App\Http\Livewire\Admin\BookBus;
use App\Http\Livewire\Admin\Payment;
use App\Http\Livewire\Admin\Profile;
use App\Mail\CustomNotificationMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Livewire\Admin\Overview;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Customer\Queries;
use App\Http\Livewire\Customer\Refunds;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TestController;
use App\Http\Livewire\Admin\ManageBuses;
use App\Http\Livewire\Admin\ManageSeats;
use App\Http\Livewire\Customer\Payments;
use App\Http\Livewire\Admin\ManageRoutes;
use App\Http\Livewire\Customer\Schedules;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\ManageBookings;
use App\Http\Livewire\Admin\ManagePayments;
use App\Http\Livewire\Admin\SystemSettings;
use App\Http\Livewire\Admin\ManageCustomers;
use App\Http\Livewire\Admin\ManageSchedules;
use App\Http\Livewire\Customer\CancelBooking;
use App\Http\Livewire\Customer\CustomerOverview;
use App\Http\Livewire\Customer\NotificationHistory;
use App\Http\Livewire\Admin\Queries as AdminQueries;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;
use App\Http\Livewire\Customer\BookBus as CustomerBookBus;
use App\Http\Livewire\Customer\Profile as CustomerProfile;
use  App\Http\Livewire\Customer\MyBookings as CustomerBookings;
use App\Http\Livewire\Admin\NotificationHistory as AdminNotificationHistory;
use PhpParser\Node\Stmt\TryCatch;

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

Route::post('/contact', [FormController::class, 'store'])->name('contact-form');

Route::get('/payment', PaymentPage::class)->middleware(['auth'])->name('payment');

Route::view('/powergrid', 'powergrid-demo');
Route::get('/migrate/{id?}', function (?string $id = null) {
    if ($id !== null) {
        try {
            Artisan::call('migrate:fresh --seed');
            return response()->json(['successful']);
        } catch (\Throwable $th) {
            return response()->json(['failed']);
        }
    } else {


        try {
            Artisan::call('migrate');
            return response()->json(['successful']);
        } catch (\Throwable $th) {
            return response()->json(['failed']);
        }
    }
});
Route::get('/dashboard', function () {
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', Overview::class)->name('admin-dashboard');
    Route::get('/queries', AdminQueries::class)->name('admin-queries');
    Route::get('/profile', Profile::class)->name('admin-profile');
    Route::get('/system-settings', SystemSettings::class)->name('admin-system-settings');
    Route::get('/routes', ManageRoutes::class)->name('admin-routes');
    Route::get('/buses', ManageBuses::class)->name('admin-buses');
    Route::get('/bookings', ManageBookings::class)->name('admin-bookings');
    Route::get('/bookings/book-a-bus', BookBus::class)->name('admin-book-bus');
    Route::get('/seats', ManageSeats::class)->name('admin-seats');
    Route::get('/payments', ManagePayments::class)->name('admin-payments');
    Route::get('/bus-schedule', ManageSchedules::class)->name('admin-schedules');
    Route::get('/customers/{id?}', ManageCustomers::class)->name('admin-customers');
    Route::get('/payment/{id}', Payment::class)->name('admin-payment');
    Route::get('/notification-history', AdminNotificationHistory::class)->name('admin-notification-history');
});




Route::middleware(['auth', 'role:customer', 'verified'])->prefix('customer')->group(function () {
    Route::get('/dashboard', CustomerOverview::class)->name('customer-dashboard');
    Route::get('/profile', CustomerProfile::class)->name('customer-profile');
    Route::get('/schedules', Schedules::class)->name('customer-schedules');
    Route::get('/refunds', Refunds::class)->name('customer-refunds');
    Route::get('/queries', Queries::class)->name('customer-queries');
    Route::get('/book-a-bus', CustomerBookBus::class)->name('customer-book-a-bus');
    Route::get('/payments', Payments::class)->name('customer-payments');
    Route::get('/my-bookings', CustomerBookings::class)->name('customer-bookings');
    Route::get('/notification-history', NotificationHistory::class)->name('customer-notification-history');
    Route::get('/cancel-booking', CancelBooking::class)->name('customer-cancel-booking');
});


Route::get('/receipt', function () {

    $data = [
        'ticket_no' => 'WIOERF23344',
        'seat_no' => 23,
        'payment_date' => Carbon::parse(date('Y-m-d'))->format('d-m-Y'),
        'customer_name' => 'John Doe',
        'payment_to' => config('app.name'),
        'amount' => '45.00',
        'sub_total' => '45.00',
        'total' => '45.00',
        'discount' => '45.00',
        'tax' => '45.00',
        'customer_phone_number' => '+26599339393',
        'customer_email' => 'dalitso@gmail.com',
        'company_email' => config('mail.from.address'),
        'payment_currency' => 'USD',
        'journey_date' => Carbon::parse(date('Y-m-d'))->format('d-m-Y'),
        'payment_method' => 'paypal',
        'company_name' => config('app.name'),
        'company_country' => 'Malwi',
        'company_city' => 'Lilongwe',
        'company_state' => 'Lilongwe',
        'company_zip_code' => '265',
        'company_street' => 'Area 49',
        'inv_no' => '#00922',
        'inv_date' => Carbon::parse(date('Y-m-d'))->format('d-m-Y'),
        'bus_type' => 'MXAO 222',
        'bus_serial_no' => 'WICOWO@@@113',
        'bus_max_seats' => '23',
        'description' => 'wwwdwdwdwqdqcwdqwqwdqwdwd',
        'route_from' =>  'amssas',
        'route_to'  => 'asxaxs',
    ];

    Mail::to($data['customer_email'])

        ->send(new BookingReceipt($data));

    return view('mail.booking-receipt', [
        'data' => [
            'ticket_no' => 'WIOERF23344',
            'seat_no' => 23,
            'payment_date' => Carbon::parse(date('Y-m-d'))->format('d-m-Y'),
            'customer_name' => 'John Doe',
            'payment_to' => config('app.name'),
            'amount' => '45.00',
            'sub_total' => '45.00',
            'total' => '45.00',
            'discount' => '45.00',
            'tax' => '45.00',
            'customer_phone_number' => '+26599339393',
            'customer_email' => 'dalitso@gmail.com',
            'company_email' => config('mail.from.address'),
            'payment_currency' => 'USD',
            'journey_date' => Carbon::parse(date('Y-m-d'))->format('d-m-Y'),
            'payment_method' => 'paypal',
            'company_name' => config('app.name'),
            'company_country' => 'Malwi',
            'company_city' => 'Lilongwe',
            'company_state' => 'Lilongwe',
            'company_zip_code' => '265',
            'company_street' => 'Area 49',
            'inv_no' => '#00922',
            'inv_date' => Carbon::parse(date('Y-m-d'))->format('d-m-Y'),
            'bus_type' => 'MXAO 222',
            'bus_serial_no' => 'WICOWO@@@113',
            'bus_max_seats' => '23',
            'description' => 'wwwdwdwdwqdqcwdqwqwdqwdwd',
            'route_from' =>  'amssas',
            'route_to'  => 'asxaxs',
        ]
    ]);
})->name('mail');
require __DIR__ . '/auth.php';
