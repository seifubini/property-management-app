<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('name');
            $table->string('category');
            $table->string('status');
            $table->string('rent_period');
            $table->string('Price');
            $table->string('currency');
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
            $table->string('bed_rooms');
            $table->string('baths');
            $table->string('garages');
            $table->string('floors');
            $table->string('building_year');
            $table->string('features_text', 300);
            $table->string('video_description');
            $table->string('video_url');
            $table->string('floor_plan_description');
            $table->string('floor_plans');
            $table->string('published');
            $table->string('created_by');
            $table->string('owner_id');
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
        Schema::dropIfExists('properties');
    }
}
