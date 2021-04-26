<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $timestamps= false;
    public $primaryKey= 'pid';
    protected $fillable = ['pname','banner','percentage','description','price','tag','compare_price','image1','image2','image3','category','sub_category','date','views'];
    use HasFactory;
}
