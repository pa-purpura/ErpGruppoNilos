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
        Schema::create('user_user', function (Blueprint $table) {

            $table->unsignedBigInteger('parent_user_id')->nullable();
            $table->unsignedBigInteger('child_user_id')->nullable();
            
            $table->enum('child_type', ['Dipendente', 'Risorsa Marketing', 'Risorsa Commerciale', 'Risorsa tecnica', 'Contatto', 'Cliente', 'Fornitore', 'Collaboratore']);
            $table->enum('parent_type', ['Responsabile HR', 'Responsabile Marketing', 'Responsabile Commerciale', 'Responsabile Tecnico', 'Segretaria', 'Operation Manager']);
            
            $table->foreign('parent_user_id')->references('id')->on('users');
            $table->foreign('child_user_id')->references('id')->on('users');

            $table->timestamps();
            $table->primary(['parent_user_id', 'child_user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_user');
    }
};
