<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventService extends Model
{
    protected $fillable = ['event_id', 'svc_id'];
}
