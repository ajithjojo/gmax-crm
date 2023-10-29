<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTaskIdColumnInTaskTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_todos', function (Blueprint $table) {
            $table
                ->unsignedInteger('task_id')
                ->nullable(false)
                ->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_todos', function (Blueprint $table) {
            $table
                ->text('task_id')
                ->nullable(true)
                ->change();
        });
    }
}
