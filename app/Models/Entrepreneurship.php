<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrepreneurship extends Model
{
	use HasFactory;

	protected $fillable = [
		'title',
		'slug',
		'content',
		'status',
		'created_at'
	];

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
