<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('legal_name');
            $table->string('cf', 16);
            $table->string('partita_iva', 11);
            $table->string('user_name', 100);
            $table->string('sdi', 100);
            $table->string('userscol', 45);
            $table->string('email')->unique();
            $table->enum('kind', ['Company', 'Private']);
            $table->enum('status', ['Active', 'Disable']);
            $table->enum('type', ['Azienda','Dipendente','Collaboratore','Cliente','Contatto','Fornitore']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
