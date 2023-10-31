<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\BusinessType;
use App\Models\BusinessState;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                ->nullable()
                ->cascadeOnDelete();
            $table->foreignIdFor(BusinessType::class)
                ->nullable()
                ->cascadeOnDelete();
            $table->foreignIdFor(BusinessState::class)
                ->nullable()
                ->cascadeOnDelete();
            $table->string('image_path');
            $table->string('ein_number');
            $table->string('phone');
            $table->string('zip_code');
            $table->string('city');
            $table->string('street_address');
            $table->string('name');
            $table->boolean('term_condition');
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
        Schema::dropIfExists('business_informations');
    }
};
