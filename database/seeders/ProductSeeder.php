<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Produto 1',
            'price' => '50',
            'description' => 'Este é um produto',
            'category' => 'Bicicleta',
        ]);
    }
}
