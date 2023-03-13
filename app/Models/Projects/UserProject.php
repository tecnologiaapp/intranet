<?php

namespace App\Models\Projects;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProject extends Model
{
	use HasFactory;

	protected $fillable = [
		'project_id',
      'user_id'
   ];

   public function user()
   {
      return $this->belongsTo(User::class);
   }
}
