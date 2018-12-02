<?php

use App\Product;
use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(Category::class)->times(6)->create();
        $products = factory(Product::class)->times(30)->create([
            'id_category' => $categories->random()->id
        ]);
    }
}
