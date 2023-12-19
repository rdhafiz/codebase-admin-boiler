<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Admin extends Eloquent implements Authenticatable
{
    use HasFactory, Notifiable, AuthenticatableTrait, SoftDeletes;

    /**
     * The collection associated with the model.
     *
     * @var string
     */
    protected $collection = 'admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    protected $appends = ['avatar_full_path'];

    // Admin Roles
    public static $SuperAdmin = 1;
    public static $CoursePlanner = 2;
    public static $FinanceManager = 3;
    public static $Permission = [
        'super' => 1,
        'course' => 2,
        'finance' => 3
    ];

    public function getAvatarFullPathAttribute()
    {
        if (isset($this->avatar) && $this->avatar != null) {
            return asset('storage/' . $this->avatar);
        }
        return null;
    }

    public static function getAdminRoleText($role)
    {
        $role = $role - 1;
        $Roles = ['Super Admin', 'Course Planner', 'Finance Manager'];
        return $Roles[$role] ?? '';
    }
}
