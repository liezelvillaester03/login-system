<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilitator extends Model
{
    use HasFactory;

    protected $table = 'facilitators';
    protected $fillable = ['username', 'password'];
}
