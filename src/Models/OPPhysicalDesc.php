<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class OPPhysicalDesc extends Model
{
    protected $table      = 'op_physical_desc';
    protected $primaryKey = 'phys_id';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'phys_gender', 
		'phys_gender_other', 
		'phys_age', 
		'phys_height', 
		'phys_body_type', 
		'phys_general_desc', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
