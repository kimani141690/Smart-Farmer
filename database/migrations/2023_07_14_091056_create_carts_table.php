<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('buyer_id')->unsigned();
            $table->bigInteger('seller_id')->unsigned();
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign("product_id")->references("id")->on("products");
            $table->foreign("buyer_id")->references("id")->on("users");
            $table->foreign("seller_id")->references("id")->on("users");
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
        Schema::dropIfExists('carts');
    }
};
