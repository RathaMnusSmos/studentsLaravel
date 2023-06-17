<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'students';

    public $fillable = [
        'firsname',
        'lastname',
        'email',
        'phone'
    ];

    protected $casts = [
        'firsname' => 'string',
        'lastname' => 'string',
        'email' => 'string',
        'phone' => 'string'
    ];

    public static array $rules = [
        'firsname' => 'required|min:4',
        'lastname' => 'required|min:4',
        'email' => 'required',
        'phone' => 'required|min:8'
    ];

    
}
