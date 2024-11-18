<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServerAssetCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('server_asset_categories')->get()->count() == 0) {
            DB::table('server_asset_categories')->insert([
                [
                    'name' => 'Aset Masuk',
                ],
                [
                    'name' => 'Aset Keluar',
                ],
            ]);
        }
    }
}
