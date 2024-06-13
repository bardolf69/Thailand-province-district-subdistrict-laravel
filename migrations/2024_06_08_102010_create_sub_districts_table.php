<?php

use App\Models\District;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sub_districts', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->string('name_in_thai');
            $table->string('name_in_english');
            $table->decimal('latitude',6,3);
            $table->decimal('longitude',6,3);
            $table->foreignIdFor(District::class)->constrained();
            $table->integer('zip_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_districts');
    }
};
