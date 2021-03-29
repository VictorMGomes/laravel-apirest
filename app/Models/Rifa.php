<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rifa extends Model
{
    use HasFactory;
    
    protected $table = "rifas";
    protected $fillable = ['name', 'rifa_category'];

}
