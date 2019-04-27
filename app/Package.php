<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
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
     * Model rlationships
     */
    public function lgaPrice()
    {
        return $this->hasMany(PackageLgaPrice::class);
    }
}
