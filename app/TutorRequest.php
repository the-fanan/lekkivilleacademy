<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorRequest extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
       'id'
    ];
}
