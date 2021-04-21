<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informations extends Model
{
    use HasFactory;
    protected $fillable =['userid','baddress1','baddress2','bcountry','bcity','baddress','bcity','saddress1','saddress2','scountry','scity','saddress','scity'];
}
