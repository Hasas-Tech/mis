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
            $table->id(); // auto-incrementing primary key 'id'
            $table->string('name'); // Name of the user
            $table->string('email')->unique(); // Email field with unique constraint
            $table->string('password'); // Password field
            $table->string('role_id'); // User role (e.g. admin, user, etc.)
            $table->string('image')->nullable(); // Profile image field, nullable in case not uploaded
            $table->timestamps(); // Created at & Updated at timestamps
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
