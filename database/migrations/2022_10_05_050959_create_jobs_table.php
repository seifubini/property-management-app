<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_id');
            $table->string('case_id');
            $table->string('vendor_id');
            $table->string('scope_of_work');
            $table->string('prepared_by');
            $table->string('client_approval');
            $table->string('management_approval');
            $table->string('agreement');
            $table->string('quotation_id');
            $table->string('completed');
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
        Schema::dropIfExists('jobs');
    }
}
