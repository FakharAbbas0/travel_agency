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
        Schema::table('proposals', function (Blueprint $table) {
            $table->string('purposal_option_1')->default("0");
            $table->string('purposal_option_2')->default("0");
            $table->string('purposal_option_3')->default("0");
            $table->string('purposal_option_4')->default("0");
            $table->string('purposal_option_5')->default("0");
            $table->string('purposal_option_6')->default("0");
            $table->string('purposal_option_7')->default("0");
            $table->string('purposal_option_8')->default("0");
            $table->string('purposal_option_9')->default("0");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proposals', function (Blueprint $table) {
            $table->dropColumn('purposal_option_1');
            $table->dropColumn('purposal_option_2');
            $table->dropColumn('purposal_option_3');
            $table->dropColumn('purposal_option_4');
            $table->dropColumn('purposal_option_5');
            $table->dropColumn('purposal_option_6');
            $table->dropColumn('purposal_option_7');
            $table->dropColumn('purposal_option_8');
            $table->dropColumn('purposal_option_9');
        });
    }
};
