<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userType extends Model
{
  protected $table = 'userType';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'IDUserType', 'userType',
    ];
}
