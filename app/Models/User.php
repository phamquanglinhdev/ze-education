<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table = 'users';
    use CrudTrait;
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    protected array $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        if ($value != null) {
            $this->attributes['password'] = Hash::make($value);
        }
    }

    public function setAvatarAttribute($value)
    {
        if ($value != null) {
            $this->attributes['avatar'] = $value;
        } else {
            $this->attributes['avatar'] = 'https://sehilo.com/wp-content/uploads/2021/09/nhan-vien-02.png';
        }
    }
}
