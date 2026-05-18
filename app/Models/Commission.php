<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    protected $fillable = [
        'address',
        'phone',
        'email',
        'budget_from',
        'budget_to',
        'commerce_from',
        'commerce_to',
        'route',
    ];

    protected $casts = [
        'budget_from'   => 'date',
        'budget_to'     => 'date',
        'commerce_from' => 'date',
        'commerce_to'   => 'date',
    ];
}
