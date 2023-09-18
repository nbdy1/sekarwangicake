<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CakeTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cake_testimonials', function (Blueprint $table) {
            $table->id();
            $table->string("testimonial_client_name");
            $table->string("testimonial_client_avatar");
            $table->string("testimonial_quote");
            $table->integer("testimonial_rating_star");

            
            $table->unsignedBigInteger("product_id");

            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('cake_testimonials');
    }
}
