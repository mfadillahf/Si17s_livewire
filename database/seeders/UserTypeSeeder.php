<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('user_types')->get()->count() == 0) {
            DB::table('user_types')->insert([
                [
                    'name' => 'PA/KPA',
                ],
                [
                    'name' => 'PPK',
                ],
                [
                    'name' => 'POKJA',
                ],
                [
                    'name' => 'PP',
                ],
                [
                    'name' => 'Admin SKPD',
                ],
                [
                    'name' => 'Operator',
                ],
                [
                    'name' => 'Admin',
                ],
                [
                    'name' => 'Pimpinan',
                ],
            ]);
        }
    }
}
