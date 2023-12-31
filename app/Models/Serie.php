<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Serie;

class Serie extends Model
{
    use HasFactory;
    protected $fillable = ['title','year','description'];
}
