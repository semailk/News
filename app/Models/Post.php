<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App\Models
 * @property $user_id
 * @property $title
 * @property $body
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'category_id', 'body', 'img'];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id' ,'');
    }
}
