<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
   use HasFactory;

   protected $fillable = [
      'certificable_type', 'certificable_id', 'code', 'url', 'user_id'
   ];
}
