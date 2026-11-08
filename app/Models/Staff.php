<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    // the table name is "staff" (not "staffs") so I set it here
    protected $table = 'staff';

    protected $fillable = ['name', 'position', 'photo', 'phone', 'extension', 'email'];
}
