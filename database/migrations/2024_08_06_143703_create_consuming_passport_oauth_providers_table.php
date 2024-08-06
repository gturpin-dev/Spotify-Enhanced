<?php

use App\Models\User;
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
        Schema::create('consuming_passport_oauth_providers', function (Blueprint $table) {
            $table->id();
            $table->string('access_token', 4096);
            $table->string('refresh_token', 4096);
            $table->dateTime('expires_at');
            $table->foreignIdFor( User::class );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consuming_passport_oauth_providers');
    }
};
