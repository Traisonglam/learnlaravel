<?php

namespace App\Models\Posts;

use App\Models\Categories\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'name',
        'description',
        'short',
        'category_id',
        'module_id',
        'slug',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
