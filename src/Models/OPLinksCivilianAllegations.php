<?php namespace App\Models;
// generated from /resources/views/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class OPLinksCivilianAllegations extends Model
{
	protected $table 		= 'OP_LinksCivilianAllegations';
	protected $primaryKey 	= 'LnkCivAlleID';
	public $timestamps 		= true;
	protected $fillable 	= 
	[	
		'LnkCivAlleCivID', 
		'LnkCivAlleAlleID', 
	];
}