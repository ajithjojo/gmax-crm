<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAmountColumnInExpenseManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expense_managers', function (Blueprint $table) {
            $table
                ->unsignedBigInteger('amount')
                ->nullable(false)
                ->default(0)
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
        Schema::table('expense_managers', function (Blueprint $table) {
            $table
                ->text('amount')
                ->nullable(true)
                ->change();
        });
    }
}
