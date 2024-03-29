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
        Schema::rename(
            'invoice_metas',
            'invoice_items'
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename(
            'invoice_items',
            'invoice_metas'
        );
    }
};
