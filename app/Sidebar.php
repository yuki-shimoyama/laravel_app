<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    //
    protected $table = 'sidebar';

    //
    protected $fillable = ['name', 'icon', 'created_at', 'updated_at'];
}
