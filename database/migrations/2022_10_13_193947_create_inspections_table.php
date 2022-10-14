<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->string('inspection_id');
            $table->string('inspection_date');
            $table->string('property_id');
            $table->string('staff_id');
            $table->string('inspection_comment', 500)->nullable();
            $table->string('inspection_description', 500)->nullable();
            $table->string('owner_comment', 500)->nullable();
            $table->string('inspection_image')->nullable();
            $table->string('inspection_attachment')->nullable();
            $table->string('inspection_color')->nullable();
            $table->string('inspection_status');
            $table->string('owner_id');
            $table->string('created_by');
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
        Schema::dropIfExists('inspections');
    }
}
