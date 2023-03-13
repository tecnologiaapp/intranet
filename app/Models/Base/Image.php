<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   use HasFactory;

   /**
   * @var array
   */
   protected $fillable = ['thumbnail', 'url'];

   public function imageable(): \Illuminate\Database\Eloquent\Relations\MorphTo
   {
      return $this->morphTo();
   }
}
