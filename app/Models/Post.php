<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
    * Get the website of the post.
    */
    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
