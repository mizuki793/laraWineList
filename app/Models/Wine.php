<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    protected $fillable=[
        'id',
        'name',
        'category',
        'taste',
        'food',
        'food_matchPt',
        'message'
    ];
    protected $dates = [];
    public $timestamps = false;
}
