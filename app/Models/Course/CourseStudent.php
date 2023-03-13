<?php

namespace App\Models\Course;

use App\Models\Course\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
   use HasFactory;

   protected $dates = [
      'created_at',
      'updated_at',
      'register_at',
   ];

   protected $fillable = [
      'user_id',
      'course_id',
      'course_status',
      'amount',
      'body',
      'rating',
      'rating_status',
      'invoice',
      'token'
   ];

   public function course(): \Illuminate\Database\Eloquent\Relations\BelongsTo
   {
      return $this->belongsTo(Course::class);
   }

   public function student(): \Illuminate\Database\Eloquent\Relations\HasMany
   {
      return $this->hasMany(User::class);
   }

   public function rating(): \Illuminate\Database\Eloquent\Relations\BelongsTo
   {
      return $this->belongsTo(Course::class);
   }
}
