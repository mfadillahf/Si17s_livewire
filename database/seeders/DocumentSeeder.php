<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('documents')->get()->count() == 0) {
            DB::table('documents')->insert([
                [
                    'name' => 'Surat Masuk',
                ],
                [
                    'name' => 'Surat Keluar',
                ],
                [
                    'name' => 'NPWP',
                ],
                [
                    'name' => 'KTP',
                ],
                [
                    'name' => 'Isian',
                ],
                [
                    'name' => 'Lainnya',
                ],
            ]);
        }
    }
}
