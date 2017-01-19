<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('start_date');
            $table->date('due_date');

            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')
                        ->references('id')
                        ->on('types')
                        ->onDelete('cascade');

            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')
                        ->references('id')
                        ->on('projects')
                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
    }
}
