<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WineCategory extends Model
{
    protected $fillable=[ 
    'name'
    ];
    protected $primaryKey = 'cid';
    protected $dates = [];
    public $timestamps = false;
}
