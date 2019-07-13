<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDelegatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delegates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('title',['Mr','Mrs','Ms','Dr','Er','Prof','Col'])->nullable();
            $table->string('company_name')->nullable();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('country_id')->nullable();
            $table->string('state_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('city')->nullable();
            $table->string('tel')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('email2')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('delegates');
    }
}
