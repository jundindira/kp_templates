<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Nama tabel
    protected $primaryKey = 'id_category'; // Primary key yang benar
    public $incrementing = true; // Jika primary key auto increment
    protected $keyType = 'int'; // Tipe data primary key

    protected $fillable = ['name_category']; // Kolom yang dapat diisi

    // Relasi ke Template
    public function templates()
    {
        return $this->hasMany(Template::class, 'id_category', 'id_category');
    }
}
