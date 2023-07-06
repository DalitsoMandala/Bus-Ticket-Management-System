<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\Bus;
use App\Models\Seat;
use App\Models\User;
use App\Models\Company;
use App\Models\Payment;
use App\Models\BusRoute;
use App\Models\Customer;
use App\Models\Schedule;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker = Faker::create();
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'customer']);


        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->AssignRole('admin');

        $cus =  User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->AssignRole('customer');

        $firstname = 'customerFirstName';
        $lastname = 'customerLastName';


        $cus->customers()->create([
            'first_name' => $firstname,
            'last_name' => $lastname,
            'phone_number' => $faker->phoneNumber(),
            'customer_uuid' => Str::upper(Str::random(6)) . $cus->id
        ]);


        foreach (range(1, 10) as $index) {
            # code...

            $cus =  User::create([
                'name' => 'customer' . $index,
                'email' => 'customer' . $index . '@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            ])->AssignRole('customer');
            $cus->customers()->create([
                'first_name' => $firstname,
                'last_name' => $lastname,
                'phone_number' => $faker->phoneNumber(),
                'customer_uuid' => Str::upper(Str::random(6)) . $cus->id
            ]);
        }


        //create company details


        Company::create([
            'company_name' => config('app.name'),
            'company_email' => 'company@example.com',
            'company_phone_number' => '+265999293999',
            'company_country' => 'Malawi',
            'company_street' => 'Area 49',
            'company_city' => 'Lilongwe',
            'company_state' => 'Lilongwe',
            'company_zip_code' => '268392',
            'tax_percentage' => '20.00',
        ]);

        //create schedules
        Schedule::create([
            'title' => 'Morning Hours',
            'depart_time' => '07:30',
            'check_in_time' => '08:00'
        ]);
        Schedule::create([
            'title' => 'Afternoon Hours',
            'depart_time' => '12:30',
            'check_in_time' => '13:00'
        ]);


        //create routes


        $range = 0;
        foreach (range(1, 2) as $index) {
            # code...
            $range++;

            $route = new  BusRoute();
            $schedule = Schedule::find($range);
            $route->schedule()->associate($schedule);
            $route->from_destination = $faker->city();
            $route->to_destination = $faker->city();
            $route->price =  $faker->randomNumber(5, true);
            $route->save();
        }


        //create buses

        foreach (range(1, 5) as $index) {


            $bus =   Bus::create([
                'model' => $faker->company(),
                'brand' => $faker->companySuffix(),
                'serial_number' => $faker->bothify('?????-#####'),
                'seats' => $faker->numberBetween(1, 20),
                'condition' => $faker->randomElement(['good', 'bad', 'fair']),

            ]);
            for ($i = 1; $i <= $bus->seats; $i++) {
                $seats = [
                    new Seat(['seat_no' => $i, 'is_taken' => false]),

                ];

                $bus->number_of_seats()->saveMany($seats);
            }
        }


        // create customers

        foreach (range(1, 6) as $index) {
            # code...

            $firstname = $faker->firstName();
            $lastname = $faker->lastName();
            $user = User::create([
                'email' => $faker->email(),
                'name' => $firstname . ' ' . $lastname,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);

            $customer = $user->customers()->create([
                'first_name' => $firstname,
                'last_name' => $lastname,
                'phone_number' => $faker->phoneNumber(),
                'customer_uuid' => Str::upper(Str::random(6)) . $user->id
            ]);

            // payment
            // $customer_with_payment = Customer::find(1);
            // $data = [
            //     'ticket_no' => 'WIOERF23344',
            //     'seat_no' => 23,
            //     'payment_date' => Carbon::parse(date('Y-m-d'))->format('d-m-Y'),
            //     'customer_name' => 'John Doe',
            //     'payment_to' => config('app.name'),
            //     'amount' => '45.00',
            //     'sub_total' => '45.00',
            //     'total' => '45.00',
            //     'discount' => '45.00',
            //     'tax' => '45.00',
            //     'customer_phone_number' => '+26599339393',
            //     'customer_email' => 'dalitso@gmail.com',
            //     'company_email' => config('mail.from.address'),
            //     'payment_currency' => 'USD',
            //     'journey_date' => Carbon::parse(date('Y-m-d'))->format('d-m-Y'),
            //     'payment_method' => 'paypal',
            //     'company_name' => config('app.name'),
            //     'company_country' => 'Malwi',
            //     'company_city' => 'Lilongwe',
            //     'company_state' => 'Lilongwe',
            //     'company_zip_code' => '265',
            //     'company_street' => 'Area 49',
            //     'inv_no' => '#00922',
            //     'inv_date' => Carbon::parse(date('Y-m-d'))->format('d-m-Y'),
            //     'bus_type' => 'MXAO 222',
            //     'bus_serial_no' => 'WICOWO@@@113',
            //     'bus_max_seats' => '23',
            //     'description' => 'wwwdwdwdwqdqcwdqwqwdqwdwd',

            // ];

            // $payment = new Payment([
            //     'transaction_id' => $faker->regexify('[A-Z]{5}[0-4]{3}'),
            //     'price' => round($faker->randomNumber(5, true)),
            //     'amount_paid' => round($faker->randomNumber(5, true)),
            //     'payment_method' => 'paypal',
            //     'currency' => 'USD',
            //     'payment_status' => true,
            //     'customer_data' => json_encode($data),

            // ]);

            // $customer_with_payment->payments()->save($payment);
        }
    }
}