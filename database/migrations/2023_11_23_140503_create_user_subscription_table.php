<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Lunar\Models\OrderLine;
use Lunar\Models\Product;
use Lunar\Models\ProductOptionValue;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_subscription', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                ->cascadeOnDelete();
            $table->foreignIdFor(OrderLine::class)
                ->cascadeOnDelete();
            $table->foreignIdFor(Product::class)
                ->cascadeOnDelete();
            $table->foreignIdFor(ProductOptionValue::class)
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_subscription');
    }
};
