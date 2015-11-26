<?php

namespace App\Models\MM;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $guarded = ['id'];

    public $timestamps = false;
}
