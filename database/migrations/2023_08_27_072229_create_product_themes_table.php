<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_themes', function (Blueprint $table) {
           
            $table->foreignId('product_id')->constrained();
            $table->foreignId('theme_id')->constrained();
            $table->string('theme_names');
            $table->timestamps();

            $table->primary(['product_id', 'theme_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_themes');
    }
}
