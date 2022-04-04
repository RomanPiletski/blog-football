<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->hasOne(Post::class);
    }

    public function author()
    {
        return $this->hasOne(User::class);
    }

    public function publish()
    {
        $this->is_publish = 1;
        $this->save();
    }

    public function unpublish()
    {
        $this->is_publish = 0;
        $this->save();
    }

    public function togglePublish($value)
    {
        if ($value == null) {
            return $this->publish();
        }
        return $this->unpublish();
    }

    public function scopePublished($query)
    {
        return $query->where("is_publish", 1);
    }

    public function scopeUnpublished($query)
    {
        return $query->where("is_publish", 0);
    }
}
