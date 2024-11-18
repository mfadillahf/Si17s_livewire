<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TroubleshootCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('troubleshoot_categories')->get()->count() == 0) {
            DB::table('troubleshoot_categories')->insert([
                [
                    'name' => 'Jaringan'
                ],
                [
                    'name' => 'Server'
                ],
                [
                    'name' => 'Aplikasi'
                ],
                [
                    'name' => 'Kelistrikan'
                ],
                [
                    'name' => 'Router'
                ],
                [
                    'name' => 'Switch'
                ],
                [
                    'name' => 'Sistem Operasi'
                ],
                [
                    'name' => 'Wi-Fi'
                ],
                [
                    'name' => 'Lainnya'
                ]
            ]);
        }
    }
}
