<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
   protected $table = 'users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'IDPerson', 'users',
    ];
}
