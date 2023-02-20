<?php

namespace App\Models;

use App\Models\Scopes\TeacherScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends User
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TeacherScope);
    }

    protected $casts = [
        'video' => 'json'
    ];

    public function setRoleAttribute()
    {
        $this->attributes["role"] = "teacher";
    }

    public function Skills(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Skill::class, "teacher_skill", "teacher_id", "skill_id");
    }
}
