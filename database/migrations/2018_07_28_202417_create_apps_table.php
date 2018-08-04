<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('logo', 250);
            $table->string('logo_thumbnail', 250);
            $table->string('slogan')->nullable();
            $table->string('phone');
            $table->string('whattsapp', 50)->nullable();
            $table->string('address', 200);
            $table->string('website', 250)->nullable();
            $table->string('email', 150)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apps');
    }
}
