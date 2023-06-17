<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product190';
    protected $fillable = ['name','price','description','image'];
    use HasFactory;
}
