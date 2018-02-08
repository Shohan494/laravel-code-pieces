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