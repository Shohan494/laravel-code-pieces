// File name databaseSeeder.php

<?php
use App\User;
use App\Product;
use App\Category;
use App\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Category::truncate();
        Product::truncate();
        Transaction::truncate();
        DB::table('category_product')->truncate();

        $usersQuantity = 200;
        $categoriesQuantity = 30;
        $productsQuantity = 1000;
        $transactionsQuantity = 1000;

        factory(User::class, $usersQuantity)->create();
        factory(Category::class, $categoriesQuantity)->create();

// Factory With Relatonship
// FOCUS
        factory(Product::class, $productsQuantity)->create()->each(
        	function ($product) {

                // Picking Randomly 1-5 catagories
                // Picking the randomly picked catagory id's
        		$categories = Category::all()->random(mt_rand(1, 5))->pluck('id');

                // attaching each of the catagory id's into the 
                // product catagories via RELATIONSHIP METHOD "categories()"
        		$product->categories()->attach($categories);
        	});

        factory(Transaction::class, $transactionsQuantity)->create();
    }
}

