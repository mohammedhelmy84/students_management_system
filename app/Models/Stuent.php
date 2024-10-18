<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Stuent extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primary_key = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
}
