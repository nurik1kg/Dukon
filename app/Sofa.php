<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Sofa extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'sofa';
    
    protected $fillable = [
          'guarantee',
          'country_id',
          'code',
          'mechanism',
          'material',
          'frame_material',
          'description',
          'width',
          'heigth',
          'depth',
          'length_b',
          'width_b',
          'bought',
          'title',
          'price'
    ];
    
    public static $country_id = ["2" => "2"];
    public static $width = ["4" => "4"];
    public static $heigth = ["4" => "4"];
    public static $depth = ["4" => "4"];
    public static $length_b = ["4" => "4"];
    public static $width_b = ["4" => "4"];
    public static $bought = ["3" => "3"];


    public static function boot()
    {
        parent::boot();

        Sofa::observe(new UserActionsObserver);
    }
    
    
    
    
}