<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function address() {
        return $this->hasOne(Address::class);
    }

    public function bank()
    {
        return $this->hasOne(Bank::class);
    }


    public function parent_user()
    {
        return $this->belongsToMany(User::class, 'user_user', 'parent_user_id', 'child_user_id')->withPivot('child_type', 'parent_type');
    }

    public function child_user()
    {
        return $this->belongsToMany(User::class, 'user_user', 'child_user_id', 'parent_user_id')->withPivot('child_type', 'parent_type');

    }
}
