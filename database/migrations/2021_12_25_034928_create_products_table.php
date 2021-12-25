<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->nullable(false);  // to show not be empty 
            $table->string('details')->nullable(false);     // to show not be empty 
            $table->text('description')->nullable(false);   // to show not be empty 
            $table->text('brand')->nullable(false);
            $table->double('price')->nullable(false);       // to show not be empty 
            $table->double('shipping_cost');
            $table->string('image_path')->nullable(false); // to show not be empty 
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
}
