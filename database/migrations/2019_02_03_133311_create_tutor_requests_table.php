<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->integer('tutor_id')->unsigned()->nullable();
            $table->enum('tutorial_type',['home','online']);
            $table->enum('status', ['pending','approved','disapproved'])->default('pending');
            $table->integer('package_id')->unsigned();
            $table->enum('extension_type',['day', 'week', 'month', 'year'])->nullable();
            $table->integer('extension_amount')->unsigned()->nullable();
            $table->integer('number_of_children')->unsigned();
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
        Schema::dropIfExists('tutor_requests');
    }
}
