<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBestSellingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('best_sellings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('prod_1')->nullable();
            $table->text('prod_2')->nullable();
            $table->text('prod_3')->nullable();
            $table->text('prod_4')->nullable();
            $table->text('prod_5')->nullable();
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
        Schema::dropIfExists('best_sellings');
    }
}
