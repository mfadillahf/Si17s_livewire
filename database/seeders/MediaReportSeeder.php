<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('media_reports')->get()->count() == 0) {
            DB::table('media_reports')->insert([
                [
                    'name' => 'Chat',
                ],
                [
                    'name' => 'Telepon',
                ],
                [
                    'name' => 'Offline',
                ],
                [
                    'name' => 'VC',
                ],
                [
                    'name' => 'LPSE Support',
                ],
            ]);
        }
    }
}
