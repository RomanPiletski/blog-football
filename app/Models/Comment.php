<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        "text"
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
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

    public function togglePublish()
    {
        if ($this->is_publish == false) {
            return $this->publish();
        }
        return $this->unpublish();
    }

    public function scopePublished($query)
    {
        return $query->where("is_publish", true);
    }

    public function scopeUnpublished($query)
    {
        return $query->where("is_publish", false);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'text'
            ]
        ];
    }

    public function remove()
    {
        $this->delete();
    }
}
