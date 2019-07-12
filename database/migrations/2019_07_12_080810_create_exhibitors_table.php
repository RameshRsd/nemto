<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExhibitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibitors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name')->nullable();
            $table->enum('title',['Mr','Miss','Mrs'])->nullable();
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
        Schema::dropIfExists('exhibitors');
    }
}
