<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Prueba',
            'price' => 900000,
            'description' => 'prueba1',
            'contenido'=> 'desbloqueado',
            'image_path' => '1698260025_WhatsApp Image 2023-08-11 at 9.52.10 AM.jpeg'
        ]);

        

    }
}
