<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tickets_kategories', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Reguler, VIP, Early Bird
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tickets_kategories');
    }
};
