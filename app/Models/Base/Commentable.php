<?php

namespace App\Models\Base;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentable extends Model
{
   use HasFactory;

   protected $fillable = ['commentable_id', 'commentable_type', 'user_id', 'parent_id', 'body', 'status'];
   protected $with = ['user', 'replies'];

   public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
   {
      return $this->belongsTo(User::class);
   }

   public function replies(): \Illuminate\Database\Eloquent\Relations\HasMany
   {
      return $this->hasMany(__CLASS__, 'parent_id')->with('user');
   }

   public function commentable(): \Illuminate\Database\Eloquent\Relations\MorphTo
   {
      return $this->morphTo();
   }
}
