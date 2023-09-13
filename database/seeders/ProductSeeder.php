<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Product;
use App\Models\Sku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()
            ->has(Sku::factory()
                ->hasAttached(Feature::factory()->count(1), ['value' => '1'])
                ->count(3)
            )
            ->count(5)
            ->create([
                'brand_id' => Brand::first()->id,
                'category_id' => Category::first()->id,
            ]);
    }
}
