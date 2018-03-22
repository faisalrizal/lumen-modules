<?php

namespace DummyNamespace\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DummyClass extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public static function rules_create()
    {
        return [
        	//
        ];
    } 

    public static function rules_update()
    {
        return [
			//
        ];
    } 
}
