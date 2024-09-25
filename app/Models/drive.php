<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drive extends Model
{
    protected $table="drives";
    protected $fillable=['name','number','email','message'];
}
