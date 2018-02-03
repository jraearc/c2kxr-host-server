<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['event_name', 'owner_id', 'description', 'budget', 'actual_funds'];
}
