<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WineCategory extends Model
{
    protected $fillable=[ 
    'cid',
    'name'
    ];
}
