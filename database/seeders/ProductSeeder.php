<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $product = new Product();
            $product->name = $faker->word(); 
            $product->price = $faker->randomFloat(2,1000,2000);
            $product->save() ;
        }
    }
}
