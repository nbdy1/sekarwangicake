<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductThemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('product_theme', function (Blueprint $table) {
        $table->unsignedBigInteger('product_id');
        $table->unsignedBigInteger('theme_id');
        $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
        $table->foreign('theme_id')->references('theme_id')->on('themes')->onDelete('cascade');
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
        Schema::dropIfExists('product_theme');
    }
}
