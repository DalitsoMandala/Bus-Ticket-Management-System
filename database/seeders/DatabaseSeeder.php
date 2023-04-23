<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bus;
use App\Models\Seat;
use App\Models\User;
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

        User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->AssignRole('customer');




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
                'seats' => $faker->numberBetween(1, 5),
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

            Payment::create([
                'transaction_id' => $faker->regexify('[A-Z]{5}[0-4]{3}'),
                'customer_id' => $customer->id,
                'price' => $faker->randomNumber(5, true),
                'amount_paid' => $faker->randomNumber(5, true),
                'payment_method' => 'paypal',
                'payment_status' => true,
            ]);
        }
    }
}
