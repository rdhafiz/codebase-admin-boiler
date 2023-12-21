<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Course extends Eloquent
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $collection = 'courses';
    protected $guarded = [];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $timestamps = true;

    public function category(){
        return $this->hasOne(CourseCategories::class, '_id', 'course_category')->select('name');
    }
    public function type(){
        return $this->hasOne(CourseType::class, '_id', 'course_type')->select('name');
    }
    public function course_fee_price(){
        return $this->hasOne(CoursePrice::class, '_id', 'course_fee');
    }
    public function course_schedules(){
        return $this->hasMany(CourseSchedules::class, 'course_id', '_id');
    }
    public function payment_instalment_details(){
        return $this->hasMany(CourseInstallments::class, 'course_id', '_id');
    }
}
