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
        Schema::table('material_in_stock', function (Blueprint $table) {
            $table->char('is_more',1)->default(0)->after('picking_qty');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('material_in_stock', function (Blueprint $table) {
            $table->dropColumn('is_more');
        });
    }
};
