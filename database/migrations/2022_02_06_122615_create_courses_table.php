<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id('cid');
            // $table->integer('cid');
            $table->string('cname');
            $table->unsignedBigInteger('did');
            $table->timestamps();
            $table->foreign('did')->references('did')->on('departments')->onDelete('cascade')->onUpdate('cascade');;

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
