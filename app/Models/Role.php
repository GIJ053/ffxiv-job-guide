<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function jobs() {
        return $this->hasMany(Job::class);
    }

    public function skills() {
        return $this->hasMany(Skill::class);
    }
}
