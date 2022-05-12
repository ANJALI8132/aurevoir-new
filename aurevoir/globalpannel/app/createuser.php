<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class createuser extends Model
{

    protected $fillable = [
        'user_name', 'user_email', 'user_password', 'user_mobile', 'user_address', 'user_website', 'user_location', 'user_state', 'user_country', 'user_plan', 'user_agent'
    ];

}
