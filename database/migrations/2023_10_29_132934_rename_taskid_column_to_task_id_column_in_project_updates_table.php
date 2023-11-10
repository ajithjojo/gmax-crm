<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('project_updates', function (Blueprint $table) {
            $table->renameColumn(
                'taskid',
                'task_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('project_updates', function (Blueprint $table) {
            $table->renameColumn(
                'task_id',
                'taskid'
            );
        });
    }
};
