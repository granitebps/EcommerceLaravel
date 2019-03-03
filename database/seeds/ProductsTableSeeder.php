<?php

use Illuminate\Database\Seeder;
use App\ProductsModel;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ProductsModel::class, 30)->create();
    }
}
