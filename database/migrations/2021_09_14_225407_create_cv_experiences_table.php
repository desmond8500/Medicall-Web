<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('debut',);
            $table->string('fin',);
            $table->string('fonction',);
            $table->string('entreprise');
            $table->string('ordre')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('cv_experiences');
    }
}
