<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('name');
            $table->string('category');
            $table->string('status');
            $table->string('agent');
            $table->string('phone_number');
            $table->string('description', 500);
            $table->string('latitude');
            $table->string('longitude');
            $table->string('images');
            $table->string('country');
            $table->string('city');
            $table->string('Address');
            $table->string('zone');
            $table->string('property_size');
            $table->string('floors');
            $table->string('building_year');
            $table->string('features_text', 300);
            $table->string('floor_plan_description');
            $table->string('floor_plans');
            $table->string('video_description');
            $table->string('video_url');
            $table->string('published');
            $table->string('created_by');
            $table->string('owner_id');
            $table->string('manager_id');
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
        Schema::dropIfExists('facilities');
    }
}
