<?php

namespace App\Models\Projects;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskProject extends Model
{
	use HasFactory;

	protected $dates = ['created_at', 'end_date'];
	protected $with = ['user'];

	protected $fillable = [
		'title',
		'description',
		'progress',
		'budget',
		'end_date',
		'board_id',
		'user_id',
		'project_id',
	];

	// public function comments()
	// {
	// 	return $this->hasMany(TaskProject::class, 'board_id')->latest();
	// }

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function days_left()
   {
      $end = Carbon::parse($this->end_date);
      $now = Carbon::now();
      $diff = $end->diffInDays($now);

      return $diff;
   }

	// public function files()
	// {
	// 	return $this->hasMany(TaskProject::class, 'board_id')->latest();
	// }
}
