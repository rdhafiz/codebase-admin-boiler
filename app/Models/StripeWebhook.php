<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class StripeWebhook extends Eloquent
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $collection = 'stripe_webhook';
    protected $guarded = [];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $timestamps = true;
}
