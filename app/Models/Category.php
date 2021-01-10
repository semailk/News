<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Models
 * @property $post_id
 * @property $title
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
