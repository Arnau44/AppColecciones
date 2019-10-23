<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table){

            $table->bigIncrements('id');
            $table->bigInteger('collection_id')->nullable();
            $table->bigInteger('user_id');
            $table->bigInteger('comment_id')->nullable();
            $table->bigInteger('item_id')->nullable();
            $table->text('content');
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
        Schema::dropifExists('coments');
    }
}
