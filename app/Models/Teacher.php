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

    public function setRoleAttribute()
    {
        $this->attributes["role"] = "teacher";
    }
}
