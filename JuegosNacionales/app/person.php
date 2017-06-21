<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
  protected $table = 'person';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'IDPerson', 'person',
    ];
}
