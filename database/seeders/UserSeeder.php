<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('users')->get()->count() == 0) {
            DB::table('users')->insert([
                [
                    'name' => 'Admin Sistem',
                    'email' => 'superadmin@admin.com',
                    'password' => Hash::make('123456'),
                ],
            ]);
        }

        User::whereName('Admin Sistem')->first()->roles()->attach(3);
    }
}
