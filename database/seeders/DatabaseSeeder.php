<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $limit = 100;

        for ($i = 8; $i < $limit; $i++) {
            $code = $i < 10 ? '0' . $i : $i;
            Product::create([
                'name' => 'Product ' . $i,
                'code' => 'PR-' . $code,
                'price' => rand(10000, 1000000),
                'stock' => rand(1, 100),
            ]);
        }
    }
}
