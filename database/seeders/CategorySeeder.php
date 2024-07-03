<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Electrónica']);
        Category::create(['name' => 'Construcción']);
        Category::create(['name' => 'Gas']);
        Category::create(['name' => 'Mecanica']);
        Category::create(['name' => 'varios']);
    }
}
