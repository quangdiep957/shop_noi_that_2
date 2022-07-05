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
        Schema::create('feadback_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fullname',30);
            $table->string('phone',11);
            $table->string('email',200)->nullable(true);
            $table->text('content')->nullable(true);
            $table->string('title',200)->nullable(true);
            $table->integer('status')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feadback_models');
    }
};
