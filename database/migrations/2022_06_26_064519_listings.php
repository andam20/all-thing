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
        Schema::create('listings', function (Blueprint $table) {

            $table->id();
            //onDelete =>when we delete a user it will delete all the data that belongs to
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('logo')->nullable();
            $table->string('tags');
            $table->string('location');
            $table->longText('description');
            $table->longText('comment')->nullable();
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
Schema::dropIfExists('listings');
}
};
