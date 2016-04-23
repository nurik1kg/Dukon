<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Armchair extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'armchair';
    
    protected $fillable = [
          'title',
          'code',
          'country',
          'material_facade',
          'frame_material',
          'color',
          'width',
          'height',
          'depth',
          'bought',
          'price'
    ];
    

    public static function boot()
    {
        parent::boot();

        Armchair::observe(new UserActionsObserver);
    }
    
    
    
    
}