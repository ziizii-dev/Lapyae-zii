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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price_id');
            $table->string('country_id');
            $table->string('brand_id');
            $table->string('mileageFrom_id');
            $table->string('mileageTo_id');
            $table->string('equipment_id');
            $table->string('carModel_id');
            $table->string('fuel_id');
            $table->string('seller_id');
            $table->string('color_id');
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
        Schema::dropIfExists('cars');
    }
};
