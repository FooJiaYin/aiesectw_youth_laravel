<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presses', function (Blueprint $table) {
            $table->string('id', 20);
            $table->integer('user_id');
            $table->integer('photo_id');
            $table->integer('category_id');
            $table->tinyInteger('status');
            $table->string('title', 255);
            $table->text('excerpt');
            $table->text('content');
            $table->timestamp('publish_at');
            $table->timestamp('publish_time');
            $table->timestamps();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presses');
    }
}
