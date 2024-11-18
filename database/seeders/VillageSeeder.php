<?php

namespace Database\Seeders;

use App\Helpers\ProvinceHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('villages')->get()->count() == 0) {
            $villages = ProvinceHelper::getVillages();

            DB::transaction(function() use($villages) {
                $collection = collect($villages);
                $parts = $collection->chunk(1000);
                foreach ($parts as $subset) {
                    DB::table('villages')->insert($subset->toArray());
                }
            });
        }
    }
}
