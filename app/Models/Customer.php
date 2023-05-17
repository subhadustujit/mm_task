<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Carbon\Carbon;

class Customer extends Model
{
    use HasFactory;

    public function getDateOfBirthAttribute($value) {
        return Carbon::parse($value)->format('d M Y');
    }
}
