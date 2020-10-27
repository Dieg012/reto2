<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('shop_cod')->nullable(false);
            $table->mediumText('description')->nullable(false);
            $table->string('imgpath')->nullable(false);
            $table->string('link');

            $table->primary(['id','shop_cod']);
            $table->foreign('shop_cod')->references('cod')->on('shops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropIfExists('products');
        });
    }
}
