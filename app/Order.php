<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

        //Fungsi untuk membuat kolom yang wajib di-isi dari database Order
        protected $fillable = [
            'product_id', 'user_id', 'quantity', 'address' 
        ];

        //Fungsi untuk menyamakan orderan sesuai user yang sedang login
        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

        //Fungsi untuk menyamakan Produk sesuai user yang sedang login
        public function product()
        {
            return $this->belongsTo(Product::class, 'product_id');
        }
}
