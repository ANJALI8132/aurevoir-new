<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plan extends Model
{

    protected $fillable = [
        'plan_type', 'plan_name', 'plan_contact', 'plan_agent'
    ];

}
