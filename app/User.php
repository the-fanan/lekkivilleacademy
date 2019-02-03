<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
//whereHas("roles", function($q){ $q->where("name", "gun-controller"); })->count()
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Model rlationships
     */
    public function subscriptionsAsTutor()
    {
        return $this->hasMany(Subscription::class, 'tutor_id');
    }

    public function requestsAsTutor()
    {
        return $this->hasMany(TutorRequest::class, 'tutor_id');
    }
}
