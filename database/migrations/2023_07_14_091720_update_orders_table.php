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
        //
        Schema::table('orders', function (Blueprint $table) {

            $table->bigInteger('payment_id')->unsigned()->after('id');


            $table->foreign("payment_id")->references("id")->on("payments");
        });

        /**
         * The orders table is a compilation of multiple cart items where
         * We for each individual cart item we store the record in orders using a loop for multiple cart items or directly for individual items
         *
         */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
