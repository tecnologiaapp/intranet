<?php

namespace App\Models\Course;

use App\Models\Base\Category;
use App\Models\Base\Image;
use App\Models\Base\Postable;
use App\Models\Course\Certificate;
use App\Models\Course\CourseStudent;
use App\Models\Course\Lesson;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
   use HasFactory;

   protected $dates = [
      'created_at',
      'updated_at',
      'start_at'
   ];

   protected $with = [
      'lessons', 'students'
   ];

   protected $fillable = [
      'user_id',
      'title',
      'subtitle',
      'language',
      'slug',
      'video',
      'level',
      'status',
      'uuid',
      'to_learn',
      'featured',
      'price',
      'updated_at'
   ];

   protected static function boot()
   {
      parent::boot();

      static::creating(function ($model) {
         $model->uuid = Str::uuid();
      });
   }

   public function author()
   {
      return $this->belongsTo(User::class, 'user_id');
   }

   public function lessons()
   {
      return $this->hasMany(Lesson::class);
   }

   public function getPhotoUrlAttribute()
   {
      return $this->image->thumbnail
      ? "https://besoft-storage.s3.us-east-2.amazonaws.com" . $this->image->thumbnail
      : $this->defaultImageUrl();
   }

   /**
   * Get the default photo URL.
   *
   * @return string
   */
   protected function defaultImageUrl()
   {
      return 'https://fakeimg.pl/1050x300/100/?text=AGENCIA%20APP';
   }

   /**
   * @return string
   */
   public function getRouteKeyName()
   {
      return 'slug';
   }

   /**
   * @return mixed
   */
   public function students()
   {
      return $this->belongsToMany(User::class, 'course_students')
         ->where('course_status', 'Paid out')
         ->withPivot(['rating', 'body'])
         ->withTimestamps();
   }

   /**
   * @return mixed
   */
   public function total()
   {
      return $this->hasMany(CourseStudent::class)->whereStatus('Paid out');
   }

   /**
   * @return array
   */
   public function levels()
   {
      return ['All', 'Beginner', 'Intermediate', 'Advanced'];
   }

   /**
   * @return array
   */
   public function languages()
   {
      return ['Spanish', 'English'];
   }

   /**
   * @return array
   */
   public function status()
   {
      return ['Pending', 'Published', 'Rejected'];
   }

   /**
   * @return mixed
   */
   public function duration()
   {
      return $this->lessons->where('published', 1)->sum('duration');
   }

   /**
   * @return string
   */
   public function getRatingAttribute()
   {
      return number_format(\DB::table('course_students')
         ->where('course_id', $this->attributes['id'])
         ->where('rating_status', 'approved')
         ->average('rating'), 2);
   }

   public function description()
   {
      return $this->morphOne(Postable::class, 'postable');
   }

   public function category()
   {
      return $this->morphToMany(Category::class, 'categorizable');
   }

   public function certificates()
   {
      return $this->morphMany(Certificate::class);
   }

   public function scopeRandomCourse($query)
   {
      $query->inRandomOrder()
      ->where('status', 'Published')
      ->select('title', 'slug')->take(1)->first();
   }

   public function image()
   {
      return $this->morphOne(Image::class, 'imageable');
   }

   public function progress()
   {
      //Obtener las lecciones del curso
      $course_lessons = Lesson::where('course_id', $this->id)->where('published', 1)->get()->pluck('id');
      $total_lessons = sizeof($course_lessons);

      //Obtener las lecciones vistas del curso
      $lessons_seen = Visitedable::where('visitedable_type', Lesson::class)->whereIn('visitedable_id', $course_lessons)->get()->count();

      //Calcular el porcentaje de progreso
      $progress = 0;
      if ($lessons_seen > 0) {
         return ($lessons_seen / $total_lessons) * 100;
      }

      return $progress;
   }
}
