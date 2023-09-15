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
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->string('product_slug')->unique();
            $table->text('product_description');
            $table->string('product_type'); // 'simplecake' or 'pastry'
            $table->unSignedBigInteger('product_selling_price'); // 'simplecake' or 'pastry'
            $table->boolean('is_discount')->default(0); // '0 false' or '1 true'
            $table->unSignedBigInteger('product_original_price')->nullable(); // 'simplecake' or 'pastry'
            $table->boolean('is_published')->default(0);
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
