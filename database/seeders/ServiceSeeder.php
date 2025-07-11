<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => 'Service 1',
            'description' => 'Description 1',
            'icon' => 'fe fe-home',
        ]);

        Service::factory(5)->create([
            'icon' => 'fe fe-home',
        ]);
    }
}
