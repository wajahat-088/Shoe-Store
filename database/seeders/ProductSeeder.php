<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;




class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('products')->insert([
            [
                'img' => 'https://m.media-amazon.com/images/I/71w+qQy9sL._AC_UL320_.jpg',
                'brand' => 'Nike',
                'title' => 'Nike Air Max 270',
                'rating' => 4.5,
                'reviews' => 1200,
                'sellPrice' => 150.00,
                'orders' => '5000+',
                'mrp' => '$200.00',
                'discount' => 25,
                'category' =>'men',
                'created_at' => now(),
                'updated_at' => now()
            ],
                [
                    'img' => 'https://m.media-amazon.com/images/I/71w+qQy9sL._AC_UL320_.jpg',
                    'brand' => 'Adidas',
                    'title' => 'Adidas Ultraboost 21',
                    'rating' => 4.7,
                    'reviews' => 1500,
                    'sellPrice' => 180.00,
                    'orders' => '7000+',
                    'mrp' => '$220.00',
                    'discount' => 18,
                    'category' =>'men',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
        ]);
    }
}
