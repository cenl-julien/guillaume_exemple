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
        Schema::create('jeux_videos', function (Blueprint $table) {
            $table->id();

            $table->string('nom', 150);
            $table->text('description');

            $table->integer('console_id')->nullable()->index();
            $table->foreign('console_id')->references('id')->on('consoles');

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
        Schema::dropIfExists('jeux_videos');
    }
};
