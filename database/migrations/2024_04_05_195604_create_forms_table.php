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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained()->onDelete('cascade');
            $table->string('first');
            $table->string('second');
            $table->string('third');
            $table->string('fourth');
            $table->string('fifth');
            $table->string('sixth');
            $table->string('seventh');
            $table->string('eighth');
            $table->string('ninth');
            $table->string('tenth');
            $table->string('eleventh');
            $table->string('twelfth');
            $table->string('thirteenth');
            $table->string('fourteenth');
            $table->string('fifteenth');
            $table->string('sixteenth');
            $table->string('seventeenth');
            $table->string('eighteenth');
            $table->string('nineteenth');
            $table->string('twentieth');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
