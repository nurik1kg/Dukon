<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Cupboard extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'cupboard';
    
    protected $fillable = [
          'title',
          'guarantee',
          'code',
          'color_facade',
          'material_fasade',
          'frame_material',
          'frame_color',
          'width',
          'height',
          'depth',
          'bought',
          'price'
    ];
    

    public static function boot()
    {
        parent::boot();

        Cupboard::observe(new UserActionsObserver);
    }
    
    
    
    
}