<?php

namespace App\Models;

use App\Models\NoticeCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
	use HasFactory;

	protected $fillable = [
		'title',
		'slug',
		'content',
		'user_id',
		'notice_category_id',
		'status',
		'created_at'
	];

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function notice_category()
	{
		return $this->belongsTo(NoticeCategory::class);
	}
}
