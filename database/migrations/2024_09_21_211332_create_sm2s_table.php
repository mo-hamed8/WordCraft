<?php

use App\Models\Word;
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
        Schema::create('sm2s', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Word::class)->onDelete("cascade");
            $table->integer('repetitions')->default(0);
            $table->double('ef')->default(2.5);
            $table->integer('interval')->default(1);
            $table->date('next_review_date');
            $table->date('last_review_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sm2s');
    }
};
