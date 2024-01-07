<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class CourseApplicants extends Eloquent
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $collection = 'course_applicants';
    protected $guarded = [];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $timestamps = true;

    public function course(){
        return $this->hasOne(Course::class, '_id', 'course_id');
    }
    public function course_details(){
        return $this->hasOne(Course::class, '_id', 'course_id')->with(['category']);
    }
    public function type(){
        return $this->hasOne(CourseType::class, '_id', 'course_type');
    }
    public function schedule(){
        return $this->hasOne(CourseSchedules::class, '_id', 'schedule_id');
    }
    public function payment_instalment_details(){
        return $this->hasMany(CourseApplicantPayments::class, 'application_id', '_id');
    }
}
