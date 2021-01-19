<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $fillable = ['user_name', 'first_name', 'last_name', 'mobile', 'email', 'dob', 'address', 'fees'];
}
