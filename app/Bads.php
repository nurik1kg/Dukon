<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Bads extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'bads';
    
    protected $fillable = [
          'title',
          'code',
          'color_facade',
          'frame_material',
          'frame_color',
          'material_facade',
          'width',
          'height',
          'depth',
          'bought',
          'price'
    ];
    

    public static function boot()
    {
        parent::boot();

        Bads::observe(new UserActionsObserver);
    }
    
    
    
    
}