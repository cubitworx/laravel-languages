<?php

namespace Cubitworx\Laravel\Languages\Model;

use Illuminate\Database\Eloquent\Model;

class Language extends Model {

	protected $guarded = [
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	];

}
