<?php

namespace App\Models;

use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use HasFactory, HasUlids;
    protected $guarded =[];
}

