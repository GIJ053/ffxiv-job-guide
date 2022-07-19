<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_descriptions', function (Blueprint $table) {
            $table->foreignId('skill_id');
            $table->string('description');
            $table->integer('required_level');
            $table->integer('cooldown')->nullable();
            $table->integer('cast_time')->nullable();
            $table->boolean('is_weaponskill');
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
        Schema::dropIfExists('skill__descriptions');
    }
}
