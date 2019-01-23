<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

        //Fungsi untuk membuat kolom yang wajib di-isi dari database Product
        protected $fillable = [
            'name', 'price', 'units', 'description', 'image'
        ];

        //Fungsi untuk menghitung Stok
        public function orders(){
            return $this->hasMany(Order::class);
        }
}
