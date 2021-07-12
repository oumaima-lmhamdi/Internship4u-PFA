<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();						
            $table->integer('i_category_id');
            $table->string('i_companyName');
            $table->string('i_title');
            $table->string('i_duration');
            $table->text('i_description');
            $table->string('i_city');
            $table->integer('i_status');
            $table->integer('i_salary');         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
