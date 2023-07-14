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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('farmer_id')->nullable()->unsigned();
            $table->bigInteger('customer_id')->nullable()->unsigned();
            $table->enum('role', ['Admin', 'Farmer', 'Customer'])->default('Customer');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->timestamp('last_login')->nullable();
            $table->enum('account_status', ['activated', 'inactive', 'blocked'])->default('inactive');
            $table->string('google_id')->nullable();
            $table->string('google_token')->nullable();
            $table->rememberToken();
            $table->timestamps();

            //relationships
            $table->foreign("farmer_id")->references("id")->on("farmers");
            $table->foreign("customer_id")->references("id")->on("farmers");
        });

        DB::update("ALTER TABLE users AUTO_INCREMENT=101; ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
