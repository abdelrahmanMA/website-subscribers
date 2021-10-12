<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
    * Get the website of the subscriber.
    */
    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
