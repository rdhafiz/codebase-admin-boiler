<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Trainers extends Eloquent
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $collection = 'trainers';
    protected $guarded = [];
    protected $hidden = [
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
