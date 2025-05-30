<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogView extends Model
{
    use HasFactory;

    protected $table = 'blog_views';

    protected $guarded = ['id'];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }
}
