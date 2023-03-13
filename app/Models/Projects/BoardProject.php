<?php

namespace App\Models\Projects;

use App\Models\Projects\TaskProject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardProject extends Model
{
	use HasFactory;

	protected $fillable = ['title', 'project_id', 'created_at', 'updated_at'];
	protected $table = 'board_projects';

	public function tasks()
	{
		return $this->hasMany(TaskProject::class, 'board_id')->latest();
	}
}
