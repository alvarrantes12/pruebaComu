<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sportCategory extends Model
{
    protected $table = 'sportCategory';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'IDSport','IDCategory', 'sportCategory',
    ];
}
