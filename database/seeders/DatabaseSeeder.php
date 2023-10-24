<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Device;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $vehicle = Vehicle::create([
            'plate' => 'ABC-12345'
        ]);

        $device = Device::create([
            'device_code' => '12345'
        ]);

        // \App\Models\User::factory(10)->create();
        // 'name' => 'Test User',
        // 'email' => 'test@example.com',

        \App\Models\User::factory(10)->create([
            'vehicle_id' => $vehicle->id,
            'device_id' => $device->id
        ]);
    }
}
