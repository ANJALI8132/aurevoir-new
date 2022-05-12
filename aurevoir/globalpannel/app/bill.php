<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{

    protected $fillable = [
        'bill_user', 'bill_from', 'bill_to', 'bill_invoice', 'bill_amount', 'bill_tax'
    ];

}
