<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id');
            $table->foreignId('role_id');
            $table->string('slug');
            $table->string('skill_name');
            $table->string('description');
            $table->string('skill_type');
            $table->integer('cooldown');
            $table->boolean('is_weaponskill');
            $table->boolean('is_ability');
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
        Schema::dropIfExists('warrior-skills');
    }
}
