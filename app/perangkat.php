<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perangkat extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];
}
