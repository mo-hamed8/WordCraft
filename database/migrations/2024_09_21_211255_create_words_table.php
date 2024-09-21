<?php

use App\Models\User;
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
        Schema::create('words', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->onDelete("cascade");
            $table->string("word");
            $table->text('definition')->nullable();
            $table->text("example")->nullable();
            $table->string('part_of_speech')->nullable();
            $table->integer("repetition")->default(1);
            $table->string("status")->default("new");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('words');
    }
};
