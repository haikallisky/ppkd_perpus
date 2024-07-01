<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create([
            'nama_level' => 'admin',
        ]);
        Level::create([
            'nama_level' => 'operator',
        ]);
        Level::create([
            'nama_level' => 'kepsek',
        ]);
    }
}
