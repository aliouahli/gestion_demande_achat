<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('da', function (Blueprint $table) {
            $table->id();
       
            $table->string('reference');
            $table->string('designation');
            $table->Integer('quantite');
            $table->string('acheteur');
            $table->Integer('etat')->default(0);
            $table->string('cccout');
            $table->string('emetteur');
           $table->date('date')->nullable();
            $table->date('delai');
            $table->string('cnecono');
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
        Schema::dropIfExists('da');
    }
}
