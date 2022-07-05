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
        Schema::create('advertisment_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('content');
            $table->datetime('start_time')->nullable(true);
            $table->datetime('end_time')->nullable(true);
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
        Schema::dropIfExists('advertisment_models');
    }
};
