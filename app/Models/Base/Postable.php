<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postable extends Model
{
   use HasFactory;

   /**
   * @var array
   */
   protected $guarded = [];

   /**
   * @var string
   */
   protected $table = 'postables';

   public function postable(): \Illuminate\Database\Eloquent\Relations\MorphTo
   {
      return $this->morphTo();
   }
}
