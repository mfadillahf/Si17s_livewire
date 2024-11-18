<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('roles')->get()->count() == 0) {
            DB::table('roles')->insert([
                [
                    'name' => 'Helpdesk',
                ],
                [
                    'name' => 'Verifikator',
                ],
                [
                    'name' => 'Admin Sistem',
                ],
                [
                    'name' => 'Admin PPE',
                ],
                [
                    'name' => 'Pimpinan',
                ],
                [
                    'name' => 'Pengelola Sarana dan Prasarana',
                ],
            ]);
        }
    }
}
