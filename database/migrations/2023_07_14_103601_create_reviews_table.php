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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('farmer_id')->unsigned();
            $table->bigInteger('customer_id')->unsigned();
            $table->string('review_title');
            $table->string('review_description', 5500);
            $table->timestamps();

            $table->foreign("farmer_id")->references("id")->on("users");
            $table->foreign("customer_id")->references("id")->on("users");
        });

        DB::update("ALTER TABLE reviews AUTO_INCREMENT=101; ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
