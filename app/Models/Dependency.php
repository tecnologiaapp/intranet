<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependency extends Model
{
	use HasFactory;

	protected $fillable = ['owner_username'];

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
