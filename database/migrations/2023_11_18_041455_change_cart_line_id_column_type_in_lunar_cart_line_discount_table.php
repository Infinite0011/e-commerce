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
        Schema::table($prefix.'cart_line_discount', function (Blueprint $table) use ($prefix) {
            $table->dropForeign($prefix.'cart_line_discount_cart_line_id_foreign');
            $table->dropColumn('cart_line_id');
        });

        Schema::table($prefix.'cart_line_discount', function (Blueprint $table) use ($prefix) {
            $table->foreignId('cart_line_id')->constrained($prefix.'cart_lines')->cascadeOnDelete();
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
        Schema::table($prefix.'cart_line_discount', function (Blueprint $table) {
            $table->dropColumn('cart_line_id');
        });
    }
};
