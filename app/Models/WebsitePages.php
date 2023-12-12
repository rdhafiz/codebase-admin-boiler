<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class WebsitePages extends Eloquent
{
    use SoftDeletes;

    protected $table = 'website_pages';
    protected $guarded = [];
    protected $hidden = ['create_at', 'updated_at', 'deleted_at'];
    public $timestamps = true;
}
