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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            //onDelete =>when we delete a user it will delete all the data that be  longs to
            $table->foreignId('subject_id');
            $table->string('name');
            $table->string('nameStudents');
            $table->string('teacherName');
            $table->string('stage');
            $table->string('group');
            $table->string('faculty');
            $table->string('department');
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
        //
    }
};
