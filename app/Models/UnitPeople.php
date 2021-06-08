<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitPeople extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $hidden =[
        'id_unit'
    ];
    protected $table = 'unitpeoples';
}
