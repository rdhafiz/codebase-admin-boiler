<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Recruiters extends Eloquent implements Authenticatable
{
    use HasFactory, Notifiable, AuthenticatableTrait, SoftDeletes;

    /**
     * The collection associated with the model.
     *
     * @var string
     */
    protected $collection = 'recruiters';

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public $timestamps = true;

    protected $appends = ['avatar_full_path'];


    public function getAvatarFullPathAttribute()
    {
        if ($this->attributes['avatar'] != null) {
            return asset('storage/' . $this->attributes['avatar']);
        }
        return null;
    }
}
