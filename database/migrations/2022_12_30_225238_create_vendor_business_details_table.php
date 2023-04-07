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
        Schema::create('vendor_business_details', function (Blueprint $table) {
            $table->id();
            $table->biginteger('vendor_id');
            $table->string('vendor_code')->unique();
            $table->string('vendor_name')->nullable();
            $table->string('vendor_address')->nullable();
            $table->string('vendor_city')->nullable();
            $table->string('vendor_state')->nullable();
            $table->string('vendor_country')->nullable();
            $table->string('vendor_pincode')->nullable();
            $table->string('vendor_mobile')->nullable();
            $table->string('vendor_website')->nullable();
            $table->string('vendor_email')->nullable()->unique();
            $table->string('address_proof')->nullable();
            $table->string('address_proof_image')->nullable();
            $table->string('business_lincese_number')->nullable();
            $table->string('gst_number')->nullable();
            $table->string('pan_number')->nullable();
            $table->tinyInteger('status')->default('0');
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
        Schema::dropIfExists('vendor_business_details');
    }
};
