<?php
/*
 created by jegan
 created at 31.03.2021
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
    //
    protected $table = "flights";
    protected $fillable = [
        'name',
        'email',
        'age'
    ];
}
