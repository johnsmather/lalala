<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Logical extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'logicals';
    protected $guarded = false;
}
