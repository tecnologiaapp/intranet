<?php

namespace App\Models\Projects;

use App\Models\Dependency;
use App\Models\Projects\BoardProject;
use App\Models\Projects\TaskProject;
use App\Models\Projects\UserProject;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	use HasFactory;

	protected $fillable = [
		'title',
      'dependency_id',
      'end_date',
      'budget',
      'description',
      'progress',
      'status',
      'user_id'
   ];

   protected $dates = ['created_at', 'end_date'];

   public function users()
   {
      return $this->hasMany(UserProject::class);
   }

   public function dependency()
   {
      return $this->belongsTo(Dependency::class);
   }

   public function user()
   {
      return $this->belongsTo(User::class);
   }

   public function tasks()
   {
      return $this->hasMany(TaskProject::class);
   }

   public function boards()
   {
      return $this->hasMany(BoardProject::class);
   }

   public function days_left()
   {
      $end = Carbon::parse($this->end_date);
      $now = Carbon::now();
      $diff = $end->diffInDays($now);

      return $diff;
   }
}
