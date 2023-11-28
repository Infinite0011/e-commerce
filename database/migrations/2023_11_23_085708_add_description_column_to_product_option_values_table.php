<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $prefix = config('lunar.database.table_prefix');
        Schema::table($prefix.'product_option_values', function (Blueprint $table) {
            $table->string('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $prefix = config('lunar.database.table_prefix');
        Schema::table($prefix.'product_option_values', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
};
