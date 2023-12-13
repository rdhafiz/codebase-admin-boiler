<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class CourseSchedule extends Eloquent
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $collection = 'course_schedules';
    protected $guarded = [];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $timestamps = true;
    protected $appends = ['start_date_format', 'end_date_format'];

    public function getStartDateFormatAttribute()
    {
        if ($this->attributes['start_date'] != null) {
            return date('d M, Y', strtotime($this->attributes['start_date']));
        }
        return null;
    }

    public function getEndDateFormatAttribute()
    {
        if ($this->attributes['end_date'] != null) {
            return date('d M, Y', strtotime($this->attributes['end_date']));
        }
        return null;
    }
}
