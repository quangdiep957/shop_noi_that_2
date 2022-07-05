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
        Schema::create('product_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',30);
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categorie_models')->onDelete('cascade');
            $table->unsignedBigInteger('style_id');
            $table->foreign('style_id')->references('id')->on('style_models')->onDelete('cascade');
            $table->string('size',30);
            $table->decimal('price');
            $table->decimal('old_price');
            $table->text('description')->nullable(true);
            $table->string('viewed',100)->nullable(true);
            $table->unsignedBigInteger('partner_id');
            $table->foreign('partner_id')->references('id')->on('partner_models')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_models');
    }
};
