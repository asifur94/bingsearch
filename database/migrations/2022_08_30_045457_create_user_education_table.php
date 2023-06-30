<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_education', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');

            $table->text('exam_name_1')->nullable();
            $table->text('subject_name_1')->nullable();
            $table->text('institute_name_1')->nullable();
            $table->text('passing_year_1')->nullable();
            $table->text('board_name_1')->nullable();
            $table->text('grade_1')->nullable();


            $table->text('exam_name_2')->nullable();
            $table->text('subject_name_2')->nullable();
            $table->text('institute_name_2')->nullable();
            $table->text('passing_year_2')->nullable();
            $table->text('board_name_2')->nullable();
            $table->text('grade_2')->nullable();


            $table->text('exam_name_3')->nullable();
            $table->text('subject_name_3')->nullable();
            $table->text('institute_name_3')->nullable();
            $table->text('passing_year_3')->nullable();
            $table->text('board_name_3')->nullable();
            $table->text('grade_3')->nullable();


            $table->text('exam_name_4')->nullable();
            $table->text('subject_name_4')->nullable();
            $table->text('institute_name_4')->nullable();
            $table->text('passing_year_4')->nullable();
            $table->text('board_name_4')->nullable();
            $table->text('grade_4')->nullable();


            $table->text('exam_name_5')->nullable();
            $table->text('subject_name_5')->nullable();
            $table->text('institute_name_5')->nullable();
            $table->text('passing_year_5')->nullable();
            $table->text('board_name_5')->nullable();
            $table->text('grade_5')->nullable();



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
        Schema::dropIfExists('user_education');
    }
}
