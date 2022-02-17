<?php

namespace App\Models\Images;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';

    protected $fillable = [
        'url',
        'file_name',
        'imageable_type',
        'imageable_id',
        'create_at',
        'updated_at',
    ];
}
