<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advances extends Model
{
    use HasFactory;

            protected $fillable =[
                'family-name','given-name',
                 'gender', 'email', 'postcode', 'prefecture_id', 'building',
                'content'
    ];
}
