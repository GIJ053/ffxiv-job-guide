<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function roles() {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function skills() {
        return $this->hasMany(Skill::class);
    }
}


