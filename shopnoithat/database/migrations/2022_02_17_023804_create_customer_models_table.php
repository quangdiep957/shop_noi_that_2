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
        Schema::create('customer_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fullname',30);
            $table->boolean('sex')->default(true); // giới tính
            $table->dateTime('DOB')->default('2000-01-01 0:0:0'); //ngày sinh
            $table->string('address',100)->nullable(true);
            $table->string('phone',30)->nullable(true);
            $table->string('email',200)->nullable(true);
            $table->text('description')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_models');
    }
};
