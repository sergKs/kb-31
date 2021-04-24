<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('count')->default(0)->comment('Количество товаров');
            $table->decimal('total', 12, 2)->default(0)->comment('Общая сумма');
            $table->timestamps();
        });

        Schema::create('carts_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cartId')->comment('Корзина');
            $table->unsignedBigInteger('productId')->comment('Товар');
            $table->unsignedInteger('count')->default(0)->comment('Количество товара');
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
        Schema::dropIfExists('carts_items');
        Schema::dropIfExists('carts');
    }
}
