<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignDelegatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foreign_delegates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('register',['Yes','No'])->nullable();
            $table->enum('attend',['Yes','No'])->nullable();
            $table->enum('gender',['Male','Female','Others'])->nullable();
            $table->enum('title',['Mr','Mrs','Ms','Dr','Er','Prof','Col'])->nullable();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->integer('recommended_id')->nullable();
            $table->string('recommended_other')->nullable();
            $table->integer('occupation_id')->nullable();
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('country_id')->nullable();
            $table->string('state_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('city')->nullable();
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();
            $table->string('mobile1')->nullable();
            $table->string('mobile2')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->text('details')->nullable();
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
        Schema::dropIfExists('foreign_delegates');
    }
}
