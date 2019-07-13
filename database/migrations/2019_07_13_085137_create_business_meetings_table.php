<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_meetings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('website')->nullable();
            $table->string('designation')->nullable();
            $table->string('tel')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->text('details')->nullable();
            $table->string('email')->nullable();
            $table->string('prefer_com')->nullable();
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
        Schema::dropIfExists('business_meetings');
    }
}
