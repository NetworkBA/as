<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('apellido')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->char('sexo', 1)->nullable();
            $table->string('telefono')->nullable();
            $table->string('fecha_nacimiento')->nullable();
            $table->string('email')->unique();
            $table->foreignId('id_tipo')->default(3);
            $table->foreign('id_tipo')->references('id')->on('tipo_usuarios');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->string('especialidad')->nullable();
            $table->foreignId('id_motivo')->nullable();
            $table->foreign('id_motivo')->references('id')->on('motivo_consultas');
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
}
