<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('photo')->nullable();
            $table->foreignId('type_document_id')->nullable()->constrained('type_documents')
                ->restrictOnUpdate()->restrictOnDelete();
            $table->string('document');
            $table->date('birthdate');
            $table->foreignId('user_id')->nullable()->constrained('users')
                ->restrictOnUpdate()->restrictOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
