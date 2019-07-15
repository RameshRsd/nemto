<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisaInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_invitations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name')->nullable();
            $table->string('passport_name')->nullable();
            $table->string('nationality')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_number')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('website')->nullable();
            $table->string('passport_number')->nullable();
            $table->integer('place_of_issue')->nullable();
            $table->string('date_of_issue')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('file')->nullable();
            $table->string('TermsOfCondition')->nullable();
            $table->enum('status',['active','inactive'])->nullable();
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
        Schema::dropIfExists('visa_invitations');
    }
}
