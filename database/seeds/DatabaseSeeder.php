<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

    	User::insert([
    		'first_name' => 'Admin',
    		'last_name' => 'Admin',
    		'job_title' => 'Admin',
    		'employee_code' => 'Admin',
    		'email' => 'Admin',
    		'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //password
    	]);

    	User::insert([
    		'first_name' => 'Violet',
    		'last_name' => 'Wagner',
    		'job_title' => 'Dentist',
    		'employee_code' => '1254682564',
    		'email' => 'violet@example.com',
    		'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //password
    	]);

    	User::insert([
    		'first_name' => 'Amanda',
    		'last_name' => 'Peterson',
    		'job_title' => 'Dentist',
    		'employee_code' => '6245833547',
    		'email' => 'amanda@example.com',
    		'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //password
    	]);

    	User::insert([
    		'first_name' => 'Ellie',
    		'last_name' => 'Mueller',
    		'job_title' => 'Nurse',
    		'employee_code' => '3356698745',
    		'email' => 'ellie@example.com',
    		'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //password
    	]);

    	User::insert([
    		'first_name' => 'Rosie',
    		'last_name' => 'Wilson',
    		'job_title' => 'Nurse',
    		'employee_code' => '4566355789',
    		'email' => 'rosie@example.com',
    		'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //password
    	]);

        factory('App\Event', 500)->create();
    }
}
