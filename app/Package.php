<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /**
     * variables
     *
     * @var array
     */
    public $specialPricing;
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

    /**
     * functions
     */
    public function hasSpecialPricing($lgaId)
    {
        $lgaPrice = $this->lgaPrice()->where('lga_id', $lgaId)->first();
        if ($lgaPrice != NULL) {
            $this->specialPricing = $lgaPrice->price_details;
            return true;
        } else {
            return false;
        }
    }
}
