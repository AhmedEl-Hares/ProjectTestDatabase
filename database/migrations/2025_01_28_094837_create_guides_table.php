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
        Schema::create('guides', function (Blueprint $table) {
            $table->id('Guide_Id')->primary();
            $table->string('Name');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Profile_Picture')->required();
            $table->string('Phone')->unique();
            $table->string('Address')->nullable();
            $table->string('Nationality');
            $table->string('License_Number')->unique();
            $table->json('Languages');
            $table->decimal('Fees', 12, 3);
            $table->string('Payment_currency'); //as a start we can use enums that has (USD, EUR, EGP)
            $table->string('Payment_method'); // cash, bank transfer, wallet
            $table->longText('Description');
            $table->boolean('VIP')->default(false);
            $table->json('Available_Dates');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guides');
    }
};
