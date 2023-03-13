<?php

namespace App\Models\Course;

use App\Models\Base\Commentable;
use App\Models\Base\Postable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
   use HasFactory;

   public $primaryKey = 'id';

   protected $with = ['user', 'comments'];

   protected $fillable = [
      'id',
      'course_id',
      'user_id',
      'title',
      'uuid',
      'video',
      'lesson_type',
      'preview',
      'duration',
      'sortOrder',
      'published',
   ];

   protected static function boot()
   {
      parent::boot();

      static::creating(function ($model) {
         $model->uuid = Str::uuid();
      });
   }

   public function getRouteKeyName(): string
   {
      return 'uuid';
   }

   public function course(): \Illuminate\Database\Eloquent\Relations\BelongsTo
   {
      return $this->belongsTo(Course::class);
   }

   //Para llevar el progreso del estudiante
   public function students(): \Illuminate\Database\Eloquent\Relations\MorphMany
   {
      //return $this->belongsToMany(User::class, 'lesson_student')->withTimestamps();
      return $this->morphMany(Visitedable::class, 'visitedable');//->withTimestamps();
   }

   //Usuario que publica la lección
   public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
   {
      return $this->belongsTo(User::class);
      //return $this->hasOne(User::class, 'users_id', 'id');
   }

   public function comments(): \Illuminate\Database\Eloquent\Relations\MorphMany
   {
      return $this->morphMany(Commentable::class, 'commentable')->where('parent_id', NULL)->latest();
   }

   public function types(): array
   {
      return ['Lecture','Video', 'Quiz'];
   }

   public function description(): \Illuminate\Database\Eloquent\Relations\MorphOne
   {
      return $this->morphOne(Postable::class, 'postable');
   }
}
