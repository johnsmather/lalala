<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Theory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'theories';
    protected $guarded = false;

}
