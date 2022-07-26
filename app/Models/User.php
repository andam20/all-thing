<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */ 
    protected $fillable = [
        'name',
        'logo',
        'email',
        'password',
        'phone',
        'bio',
        'dept',
        'gender',
        'room',
        'usertype',
        'block',
        'liveplace',
        'birthday', 

        
    ];

    /**
     * The attributes that should be hidden for serialization.
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
     * The attributes that should be cast.
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

     
    //relation ship with listings
    public function listings(){
        return $this->hasMany(Listing::class,'user_id');
    }

    //relation ship with costs
    public function costs(){
        return $this->hasMany(Costs::class,'cost_id');
    }

    //relation ship with subjects
    public function subjects(){
        return $this->hasMany(Subjects::class,'subject_id');
    }

}
