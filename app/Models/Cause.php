<?php

namespace App\Models;

use Database\Factories\CauseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    /** @use HasFactory<CauseFactory> */
    use HasFactory;
}
