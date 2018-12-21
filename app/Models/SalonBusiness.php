<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalonBusiness extends Model
{
    public $timestamps = false;

    protected $table = 'salon_businesses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'cvr',
        'bank_account_number',
        'city',
        'street',
        'street_number',
        'post_code',
        'phone',
        'email',
        'lat',
        'long',
    ];

}
