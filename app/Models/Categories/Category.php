<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'slug',
        'status',
        'weight',
        'created_at',
        'updated_at',
    ];

    public function posts(){
        return $this->hasMany(post::class, category_id);
    }
}
