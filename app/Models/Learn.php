<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learn extends Model
{
	use HasFactory;

	protected $fillable = ['title', 'slug', 'content', 'user_id', 'created_at'];

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
