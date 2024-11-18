<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('report_categories')->get()->count() == 0) {
            DB::table('report_categories')->insert([
                [
                    'name' => 'SPSE',
                ],
                [
                    'name' => 'SIRUP',
                ],
                [
                    'name' => 'e-katalog',
                ],
                [
                    'name' => 'SILAPRAJA',
                ],
                [
                    'name' => 'Bela Pengadaan',
                ],
            ]);
        }
    }
}
