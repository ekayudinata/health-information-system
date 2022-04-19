<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Patient;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Adipa Agastya',
            'email' => 'adipa@omsamedic.com',
            'password' => bcrypt('12345'),
            'user_role_id' => 1,
            'employee_id' => 1
        ]);

        Patient::create([
            'medic_record' => 'U# 309854',
            'name' => 'NI KETUT SARMAWI',
            'gender' => 'P',
            'birth_date' => '1970-02-23',
            'address' => 'JL. GADUNG GG XI/3 DPS',
            'phone' => '082147958349',
            'nationality' => 'WNI',
            'id_card_number' => '3306124403910302',
            'bpjs_number' => '0001308270036',
            'bpjs_medic' => 'FASKES JIMBARAN'
        ]);

        Employee::create([
            'name' => 'NI WAYAN SUDIATI',
            'gender' => 'P',
            'address' => 'JL. PADMA GG XI/3 DPS',
            'phone' => '082141727111',
            'employeeposition_id' => 1,
            'work_status' => 'DW'
        ]);
    }
}
