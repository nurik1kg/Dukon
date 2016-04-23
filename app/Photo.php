<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'photo';
    
    protected $fillable = [
          'code',
          'photo'
    ];
    

    public static function boot()
    {
        parent::boot();

        Photo::observe(new UserActionsObserver);
    }
    
    
    
    
}