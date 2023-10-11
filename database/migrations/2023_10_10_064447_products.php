<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() 
    { 
        Schema::create('products', function (Blueprint $table) { 
                $table->bigIncrements('id');
                $table->string('name')->nullable();
                $table->longText('detail')->nullable();
                $table->decimal('price', 10, 2); // Product price (up to 10 digits, 2 decimal places)
                $table->integer('stock_quantity'); // Stock quantity
                $table->string('photo',400)->nullable();
                $table->timestamps();
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('products');
        }
};
