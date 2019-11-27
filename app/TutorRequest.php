<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorRequest extends Model
{
<<<<<<< HEAD
    use Moderatable;
=======
>>>>>>> ef095f33a17bef2ab355906518afd81c352d88be

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

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
