<?php

namespace App\Plant\Models;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = ['user_id', 'type_id', 'name', 'planted_at'];
}
