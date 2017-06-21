<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoryTest extends Model
{
  protected $table = 'categoryTest';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'IDCategory', 'IDTest',
    ];
}
