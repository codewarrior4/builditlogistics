<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordermessages extends Model
{
    use HasFactory;
    protected $fillable =['orderid','email','userid','message','subject','status'];
}