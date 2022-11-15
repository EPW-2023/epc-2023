<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('namatim')->default('anonymous');
            $table->string('nomer_reg')->default('EPC000');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('role', ['Dev', 'Admin', 'Guest'])->default('Guest');
            $table->enum('verified', ['true', 'false'])->default('false');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
