<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(TestData::class);
    }
}

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Create Administrator
        User::create([
            'name' => 'Oliver Reinking',
            'email' => 'admin@newspilot.de',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
            'is_admin' => true,
            'is_employee' => false,
            'is_customer' => true,
        ]);
    }
}
class TestData extends Seeder
{
    public function run()
    {
        // Lege 1500 Anwender an
        User::factory()->times(1500)->create();
    }
}
