<?php

namespace Database\Seeders;

use App\Helpers\ProvinceHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('provinces')->get()->count() == 0) {
            $provinces = ProvinceHelper::getProvinces();

            DB::table('provinces')->insert($provinces);
        }
    }
}
