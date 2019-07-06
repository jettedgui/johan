<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCourseStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_course_student', function (Blueprint $table) {
            $table->Integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->Integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on ('users');
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
        Schema::dropIfExists('table_course_student');
    }
}
