<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $tablename="countries";
    protected $primarykey = "id";
    use HasFactory;
    protected $fillable = [
        'code',
        'Countries',
    ];
}
