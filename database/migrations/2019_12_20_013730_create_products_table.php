<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

                        $table->bigInteger('brand_id')->unsigned();
                        $table->foreign('brand_id')->references('id')->on('brand');
                        $table->bigInteger('category_id')->unsigned();
                        $table->foreign('category_id')->references('id')->on('category');

                        $table->string('name', 250);
                        $table->decimal('price', 8, 2);
                        $table->string('description', 2000);
                        $table->integer('stock');
                        $table->string('image', 250);
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
