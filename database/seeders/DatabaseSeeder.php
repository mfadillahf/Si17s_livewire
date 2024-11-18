<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Reback',
        //     'email' => 'user@demo.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);

        $this->call(DocumentSeeder::class);
        // $this->call(InstituteSeeder::class);
        $this->call(MediaReportSeeder::class);
        $this->call(ReportCategorySeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ServerAssetCategorySeeder::class);
        // $this->call(ServerAssetCategorySeeder::class);
        // $this->call(TroubleshootCategorySeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(RegencySeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(VillageSeeder::class);
        $this->call(UserTypeSeeder::class);
        $this->call(TroubleshootCategorySeeder::class);
        $this->call(UserSeeder::class);
    }
}
