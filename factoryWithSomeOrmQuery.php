<?php

$factory->define(Product::class, function (Faker\Generator $faker) {
    return [
    		.....
    		.....
    		.....

        'status' => $faker->randomElement([Product::AVAILABLE_PRODUCT, Product::UNAVAILABLE_PRODUCT]),
        'image' => $faker->randomElement(['1.jpg', '2.jpg', '3.jpg']),

        // Focus Here
        // Focus Here
        'seller_id' => User::all()->random()->id,
        //Same as : User::inRandomOrder()->first()->id
    ];
});

$factory->define(Transaction::class, function (Faker\Generator $faker) {
	// Focus Here
	// Focus Here
	$seller = Seller::has('products')->get()->random();
	$buyer = User::all()->except($seller->id)->random();
	
    return [
        'quantity' => $faker->numberBetween(1, 3),
        'buyer_id' => $buyer->id,
        'product_id' => $seller->products->random()->id,
        // User::inRandomOrder()->first()->id
    ];
});