<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dblog extends Model
{
    use HasFactory;

    protected $table = 'dblogs';

    protected $fillable = [
      'title',
      'photo',
      'content',
    ];

}
