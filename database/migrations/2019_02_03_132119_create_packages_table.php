<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('amount')->unsigned();
            $table->string('default_currency_code')->default('NGN');
            $table->enum('group', ['nursery and primary', 'secondary, high-school and post-secondary', 'foreign exams', 'english grammar, literature and writing']);
            $table->enum('duration_type',['day', 'week', 'month', 'year']);
            $table->integer('duration_amount')->unsigned();
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
        Schema::dropIfExists('packages');
    }
}
