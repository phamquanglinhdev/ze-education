<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Course extends Model
{
    use CrudTrait;
    use HasFactory;
    use SoftDeletes;
    protected array $dates = ['deleted_at'];
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'courses';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];


    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function setSlugAttribute()
    {
        $this->attributes['slug'] = Str::slug($this->name, "-");
    }
    public function setThumbnailAttribute($value)
    {
        if ($value != null) {
            $this->attributes['thumbnail'] = $value;
        } else {
            $this->attributes['thumbnail'] = 'https://www.mikereyfman.com/wp-content/gallery/panoramic-1-to-2-ratio/D1D7897-Final-Leveled-2560.jpg';
        }
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function Tags()
    {
        return $this->belongsToMany(Tag::class, "course_tag", "course_id", "tag_id");
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
