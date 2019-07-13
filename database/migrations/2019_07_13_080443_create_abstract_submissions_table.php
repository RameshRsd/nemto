<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbstractSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abstract_submissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('title',['Mr','Mrs','Ms','Dr','Er','Prof','Col'])->nullable();
            $table->string('name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('presentation_title')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address1')->nullable();
            $table->text('abstract_info')->nullable();
            $table->text('objective')->nullable();
            $table->text('method')->nullable();
            $table->text('result')->nullable();
            $table->text('conclusion')->nullable();
            $table->text('question1')->nullable();
            $table->text('question2')->nullable();
            $table->text('nature')->nullable();
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
        Schema::dropIfExists('abstract_submissions');
    }
}
