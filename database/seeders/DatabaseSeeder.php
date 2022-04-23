<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\EmployeePosition;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Patient;
use App\Models\UserRole;
use App\Models\Clinic;

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
            'employee_id' => 1,
            'clinic_id' => 1
        ]);

        Patient::create([
            'medic_record_number' => 'U# 309854',
            'name' => 'NI KETUT SARMAWI',
            'gender' => 'P',
            'birth_date' => '1970-02-23',
            'address' => 'JL. GADUNG GG XI/3 DPS',
            'phone' => '082147958349',
            'nationality' => 'WNI',
            'id_card_number' => '3306124403910302',
            'bpjs_number' => '0001308270036',
            'bpjs_medic' => 'FASKES JIMBARAN',
            'type' => 'BPJS'
        ]);

        Employee::create([
            'name' => 'I Putu Adipa',
            'gender' => 'L',
            'address' => 'Jl. Makmur Sempurna No. 10 Kuta',
            'phone' => '089378277564',
            'employeeposition_id' => 2,
            'work_status' => 'DW'
        ]);

        Employee::create([
            'name' => 'Ni Wayan Sudiati',
            'gender' => 'P',
            'address' => 'Jl. Padma Gg XI/3 Denpasar',
            'phone' => '082141727111',
            'employeeposition_id' => 1,
            'work_status' => 'DW'
        ]);

        EmployeePosition::create([
            'name_position' => 'Dokter'
        ]);
        EmployeePosition::create([
            'name_position' => 'STAFF IT'
        ]);

        UserRole::create([
            'role' => 'Super Admin'
        ]);
        UserRole::create([
            'role' => 'Admin Finance'
        ]);

        Clinic::create([
            'name' => 'Klinik Mandiri Denpasar',
            'address' => 'Jl. Merdeka Raya No.25',
            'phone' => '082182890379'
        ]);
        Clinic::create([
            'name' => 'Klinik Mandiri Kuta',
            'address' => 'Jl. Kuta Timur No.43',
            'phone' => '089337274627'
        ]);
    }
}
