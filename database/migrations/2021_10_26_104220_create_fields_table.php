<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name','190');
            $table->text('description');
            $table->text('reasons');
            $table->text('where_can');
            $table->text('learn_plan');
            $table->text('what_can');
            $table->string('image_1','190');
            $table->string('image_2','190');
            $table->string('image_3','190');
            $table->string('join_url','190');
            $table->string('about_url','190');
            $table->text('basic_info');
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
        Schema::dropIfExists('fields');
    }
}
