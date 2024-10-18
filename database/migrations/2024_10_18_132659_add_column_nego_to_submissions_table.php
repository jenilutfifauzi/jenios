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
        Schema::table('submissions', function (Blueprint $table) {
            $table->bigInteger('price')->after('description')->default(0);
            $table->enum('nego', ['yes', 'no'])->after('price')->default('no');
            $table->bigInteger('nego_price')->after('nego')->nullable()->default(0);
            $table->bigInteger('price_final')->after('nego_price')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('submissions', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('nego');
            $table->dropColumn('nego_price');
            $table->dropColumn('price_final');
        });
    }
};
