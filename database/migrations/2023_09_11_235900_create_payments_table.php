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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('external_id')->nullable();
            $table->foreignId('order_id')->constrained();
            $table->integer('method'); //ENUM
            $table->integer('status'); //ENUM
            $table->integer('installments')->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->text('qr_code_64')->nullable();
            $table->text('qr_code')->nullable();
            $table->text('ticket_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
