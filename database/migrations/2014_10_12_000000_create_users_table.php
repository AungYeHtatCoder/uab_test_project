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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('gender')->default('N/A');
            $table->string('type')->default('customer');
            $table->string('nrc_type')->default('N/A');
            $table->string('phone')->nullable();
            $table->string('other_phone')->default('N/A');
            $table->string('father_name')->default('N/A');
            $table->date('dob')->nullable();
            $table->string('education')->default('N/A');
            $table->string('occupation')->default('N/A');
            $table->string('religion')->default('N/A');
            $table->string('country')->default('N/A');
            $table->string('city')->default('N/A');
			$table->string('state')->default('N/A');
			$table->string('zip_code')->default('N/A');
            $table->string('contact_address')->nullable();
            $table->string('permanent_address')->default('N/A');
            $table->string('business_address')->default('N/A');
            $table->string('status')->default('pending');
            $table->text('remark')->default('N/A');
            $table->string('profile')->default('default.jpg');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};