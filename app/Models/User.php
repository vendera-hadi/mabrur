<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'category_id', 'roles', 'scan_tabungan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeMember($query)
    {
        return $query->where('role', 'member');
    }

    public function scopeHasUploaded($query)
    {
        return $query->whereRaw('scan_tabungan IS NOT NULL');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function video()
    {
        return $this->hasOne('App\Models\Video');
    }
}
