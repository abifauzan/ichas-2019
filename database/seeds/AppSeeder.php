<?php

use Illuminate\Database\Seeder;
use App\Model\Role;
use App\Model\User;
use App\Model\Helper;
use App\Model\UserSeminar;
use App\Model\PaymentType;

use Carbon\Carbon;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentType::create([
            'type' => 'default'
        ]);
        PaymentType::create([
            'type' => 'early_bird',
            'price' => '600000'
        ]);
        PaymentType::create([
            'type' => 'other_universities',
            'price' => '1200000'
        ]);
        PaymentType::create([
            'type' => 'seminar_only',
            'price' => '100000'
        ]);
        PaymentType::create([
            'type' => 'umb_student',
            'price' => '700000'
        ]);
        PaymentType::create([
            'type' => 'seminar_ots',
            'price' => '200000'
        ]);
        // Add Role
        Role::create([
            'name' => 'Administrator',
            'slug' => 'admin',
            'description' => 'Role of Administrator'
        ]);
        Role::create([
            'name' => 'Registrant Seminar',
            'slug' => 'reg_seminar',
            'description' => 'Role of Registrant Seminar'
        ]);
        Role::create([
            'name' => 'Registrant Conference',
            'slug' => 'reg_conference',
            'description' => 'Role of Registrant Conference'
        ]);
        Role::create([
            'name' => 'The Judges',
            'slug' => 'the_judges',
            'description' => 'Role of The Judges'
        ]);

        // Add Admin
        User::create([
            'id_role' => 1,
            'name' => 'Admin Handsome',
            'email' => 'admin@gmail.com',
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'password' => bcrypt('secret'),
            'id_payment_type' => 1
        ]);

        // Add Registrant Seminar
        User::create([
            'id_role' => 2,
            'name' => 'Abi Fauzan',
            'email' => 'abi@gmail.com',
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'password' => bcrypt('secret'),
            'id_payment_type' => 2
        ]);

        // Add Registrant Conference
        User::create([
            'id_role' => 3,
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'password' => bcrypt('secret'),
            'id_payment_type' => 3
        ]);

        // Add The Judge
        User::create([
            'id_role' => 4,
            'name' => 'Clark Ken',
            'email' => 'clark@gmail.com',
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'password' => bcrypt('secret'),
            'id_payment_type' => 1
        ]);

        // Add Helper
        Helper::create([
            'slug' => 'activate_e_certificate',
            'description' => 'Activate E-Certificate Modul',
            'status' => 0,
        ]);

        Helper::create([
            'slug' => 'activate_payment_seminar',
            'description' => 'Activate Upload Payment Seminar Modul',
            'date_end' => Carbon::now()->toDateString(),
            'status' => 0,
        ]);

        Helper::create([
            'slug' => 'activate_submit_abstract',
            'description' => 'Activate Submit Abstract Modul',
            'date_end' => Carbon::now()->toDateString(),
            'status' => 0,
        ]);

        Helper::create([
            'slug' => 'activate_submit_paper',
            'description' => 'Activate Submit Paper Modul',
            'date_end' => Carbon::now()->toDateString(),
            'status' => 0,
        ]);

        Helper::create([
            'slug' => 'activate_payment_conference',
            'description' => 'Activate Upload Payment Conference Modul',
            'date_end' => Carbon::now()->toDateString(),
            'status' => 0,
        ]);

        Helper::create([
            'slug' => 'activate_early_bird',
            'description' => 'Activate Earyly Bird Payment Modul',
            'date_end' => Carbon::now()->toDateString(),
            'status' => 0,
        ]);


    }
}
