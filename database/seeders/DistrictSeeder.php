<?php

namespace Database\Seeders;

use App\Helpers\ProvinceHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('districts')->get()->count() == 0) {
            $districts = ProvinceHelper::getDistricts();

            DB::table('districts')->insert($districts);
        }
    }
}
