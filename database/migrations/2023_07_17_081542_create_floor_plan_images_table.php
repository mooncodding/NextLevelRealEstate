<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFloorPlanImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floor_plan_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('floor_plan_id');
            $table->foreign('floor_plan_id')->references('id')->on('floor_plans');
            $table->string('image');
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
        Schema::table('floor_plan_images', function (Blueprint $table) {
            //
        });
    }
}
