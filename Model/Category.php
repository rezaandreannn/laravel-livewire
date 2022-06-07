<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table = 'categories';


    public function produks() //relasi ke table produk
    {
        return $this->hasMany(Produk::class);
    }
}
