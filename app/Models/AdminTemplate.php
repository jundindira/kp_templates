<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminTemplate extends Model
{
    use HasFactory;

    protected $table = 'admin_templates';
    protected $primaryKey = 'id_template'; // Tentukan primary key jika bukan 'id'

    protected $fillable = [
        'name_templates',
        'description',
        'pictures',
        'id_category',
        'status_templates',
        'fitur_templates',
        'file_templates',
    ];

    // Relasi ke kategori
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }
}
