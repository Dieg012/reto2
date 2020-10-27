<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->smallInteger('id')->nullable(false);
            $table->string('shop_cod')->nullable(false);
            $table->string('name', 30)->nullable(false);
            $table->mediumText('description')->nullable(false);
            $table->string('imgpath', 50)->nullable(false);
            $table->string('link');
            $table->primary(['id','shop_cod']);
            $table->foreign('shop_cod')->references('cod')->on('shops')->nullable(false);
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
