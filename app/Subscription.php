<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
     ];

    /**
     * Model relationships
    */
    public function tutor()
    {
        return $this->belongsTo(User::class, 'tutor_id');
    }

}
