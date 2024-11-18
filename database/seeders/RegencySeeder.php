<?php

namespace Database\Seeders;

use App\Helpers\ProvinceHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('regencies')->get()->count() == 0) {
            $regencies = ProvinceHelper::getRegencies();

            DB::table('regencies')->insert($regencies);
        }
    }
}
