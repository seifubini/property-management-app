<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('property_id');
            $table->string('owner_id');
            $table->string('property_name');
            $table->string('contract_code');
            $table->string('property_code');
            $table->string('customer_id');
            $table->string('owner_address');
            $table->string('owner_email');
            $table->string('place_of_reference');
            $table->string('property_purpose');
            $table->string('property_floor_range');
            $table->string('delivery_time');
            $table->string('bedrooms_number');
            $table->string('preference_area');
            $table->string('agent_id');
            $table->string('rent_fee');
            $table->string('rent_fee_currency');
            $table->string('rent_duration');
            $table->string('site_visit_vehicle');
            $table->string('client_id_card');
            $table->string('client_comment');
            $table->string('client_remark');
            $table->string('contract_status');
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
        Schema::dropIfExists('tenants');
    }
}
