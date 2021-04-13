<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TAC extends Model
{
    use HasFactory;
    protected $fillable = ['description'];
    public $table= "tac";
    public $timestamps= false;
}
