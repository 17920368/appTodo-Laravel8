<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            $table->id();
            $table->string('title');
            // $table->bigInteger('category_id')->unsigned();
            $table->timestamps();
            // $table
            //     ->foreign('category_id')
            //     ->references('id')
            //     ->on('categorias')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}