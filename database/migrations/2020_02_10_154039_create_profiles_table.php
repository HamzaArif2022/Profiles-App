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
        //   la table Profiles
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 70);
            $table->string('password', 60);
            $table->text('bio');
            $table->timestamps(); //pour note date updating and  date creating
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};