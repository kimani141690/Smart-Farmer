<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cart_id')->unsigned();
            $table->integer('total_price')->unsigned();
            $table->timestamps();

            $table->foreign("cart_id")->references("id")->on("carts");
        });

        DB::update("ALTER TABLE carts AUTO_INCREMENT=101; ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
