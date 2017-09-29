<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblStudentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_student_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('std_name');
            $table->string('std_fname');
            $table->string('std_mname');
            $table->string('std_email');
            $table->string('std_phone');
            $table->string('std_address');
            $table->string('std_roll');
            $table->string('std_session');
            $table->string('std_result');
            $table->string('std_position');
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
        Schema::dropIfExists('tbl_student_info');
    }
}
