<?php

namespace App\Models;

use App\Models\City;
use App\Models\Dependency;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
   use HasApiTokens;
   use HasFactory;
   use HasProfilePhoto;
   use Notifiable;
   use TwoFactorAuthenticatable;
   use HasRoles;

   protected $dates = ['created_at', 'date_of_birth'];

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
      'name',
      'username',
      'email',
      'profile_photo_path',
      'password',
      'status',
      'city_id',
      'sex',
      'day',
      'month',
      'dependency_id',
      'phone_number',
      'ext_number',
      'position',
      'profession',
      'user_type'
   ];

   /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
   protected $hidden = [
      'password',
      'remember_token',
      'two_factor_recovery_codes',
      'two_factor_secret',
   ];

   /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
   protected $casts = [
      'email_verified_at' => 'datetime',
   ];

   /**
   * The accessors to append to the model's array form.
   *
   * @var array
   */
   protected $appends = [
      'profile_photo_url',
   ];

   public function getRouteKeyName()
   {
      return 'username';
   }

   public function dependency()
   {
      return $this->belongsTo(Dependency::class);
   }

   public function city()
   {
      return $this->belongsTo(City::class);
   }

   public function image()
   {
      return 'storage/users/'.$this->profile_photo_path;
   }

   public function thumbnail()
   {
      return 'storage/users/thumbnail/'.$this->profile_photo_path;
   }

   // public function month_birthday()
   // {
   //    return $this->date_of_birth->format('m');
   //    //return $this->belongsTo(Dependency::class);
   // }
}
