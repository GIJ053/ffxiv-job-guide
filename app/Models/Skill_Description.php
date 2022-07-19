<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill_Description extends Model
{
    use HasFactory;

    public function skills() {
        return $this->hasOne(Skill::class);
    }
}
