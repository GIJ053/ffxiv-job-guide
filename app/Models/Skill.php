<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public function jobs() {
        return $this->belongsTo(Job::class);
    }

    public function roles() {
        return $this->belongsTo(Role::class);
    }

    public function skill_descriptions() {
        return $this->hasOne(Skill_Description::class);
    }
}
