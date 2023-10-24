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
        Schema::create('nilai_pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pekerjaan_id')->constrained('pekerjaans');
            $table->bigInteger('kriteria_id')->constrained('kriterias');
            $table->bigInteger('subcriteria_id')->constrained('subcriteria');
            $table->float('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
