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
            $table->bigIncrements('id');
            $table->text('product_name');
            $table->text('model_number')->nullable();
            $table->text('category');
            $table->text('sub_category'); 
            $table->text('group_by_name')->nullable();           
            $table->text('attributes')->nullable();            
            $table->text('multiple_images');
            $table->text('feature_image')->nullable()->comment('feature image in product page');
            $table->text('description');
            $table->text('status');
            $table->integer('order')->nullable(); 
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
