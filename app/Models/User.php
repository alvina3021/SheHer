<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//dari register controller untuk mutator otomatis
use Illuminate\Support\Facades\Hash;

//class User extends Authenticatable
//{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    //use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    //protected $fillable = [
        //'name',
        //'email',
        //'password',
    //];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    //protected $hidden = [
       // 'password',
        //'remember_token',
    //];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    //protected $casts = [
    //'email_verified_at' => 'datetime',
//];
//public function setPasswordAttribute($value)
//{
    //$this->attributes['password'] = Hash::make($value);
//}
//} 

// app/Models/User.php
class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password', 'role', 'position', 'bio', 'avatar'
    ];
    
    // Role: 'masyarakat' atau 'pejabat'
    public function isMasyarakat()
    {
        return $this->role === 'masyarakat';
    }
    
    public function isPejabat()
    {
        return $this->role === 'pejabat';
    }
}
