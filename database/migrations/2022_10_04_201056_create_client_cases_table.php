<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_cases', function (Blueprint $table) {
            $table->id();
            $table->string('case_name');
            $table->string('case_id');
            $table->string('client_id');
            $table->string('property_id');
            $table->string('contract_id');
            $table->string('employee_id');
            $table->string('case_description');
            $table->string('case_status');
            $table->string('service_id');
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
        Schema::dropIfExists('client_cases');
    }
}
