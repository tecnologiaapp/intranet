<?php

namespace App\Models\Base;

use App\Models\Base\Post;
use App\Models\Course\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   use HasFactory;

   protected $table = 'categories';

   protected $fillable=[
      'name',
      'parent_id',
      'image',
      'slug',
      'sortOrder'
   ];

   public function parentCategory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
   {
      return $this->belongsTo(self::class, 'parent_id');
   }

   /**
   * @return string
   */
   public function getRouteKeyName(): string
   {
      return 'slug';
   }

   public function courses(): \Illuminate\Database\Eloquent\Relations\MorphToMany
   {
      return $this->morphedByMany(Course::class, 'categorizable');
   }
}
