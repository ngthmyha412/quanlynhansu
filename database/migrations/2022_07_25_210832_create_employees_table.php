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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->mediumText('address');
            
            $table->integer('gender_id')->unsigned();
            $table->date('join_date');
            $table->date('birth_date');
            $table->integer('dept_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('division_id')->unsigned();
            $table->integer('salary_id')->unsigned();
            $table->integer('age');
            $table->string('picture');

            $table->foreign('dept_id')->references('id')->on('departments');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('salary_id')->references('id')->on('salaries');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->timestamps();
            
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
