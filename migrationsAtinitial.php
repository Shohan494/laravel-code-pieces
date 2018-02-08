<?php

// use false/0/negative type value at starting point of any migration

            $table->string('verified')->default(User::UNVERIFIED_USER);
            $table->string('verification_token')->nullable();
            $table->string('admin')->default(User::REGULAR_USER);

// or use positive as need of your project
// 

            $table->string('verified')->default(User::VERIFIED_USER);
            $table->string('verification_token')->nullable();
            $table->string('admin')->default(User::ADMIN_USER);


// foreign key relation ships sample

            $table->integer('buyer_id')->unsigned();
            $table->integer('product_id')->unsigned();

// naming conventions, single format + _id of table name which is plural

            $table->foreign('buyer_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');