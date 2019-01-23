<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, HasApiTokens;

   //Fungsi untuk membuat kolom yang wajib di-isi dari database user
    protected $fillable = [
        'name', 'email', 'password',
    ];

   //Fungsi untuk menyamarkan isi kolom
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Fungsi untuk menghitung banyak orderan user
    public function orders()
        {
            return $this->hasMany(Order::class);
        }
}
