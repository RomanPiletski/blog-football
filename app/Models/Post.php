<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function author()
    {
        return $this->hasOne(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
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

    public function recommend()
    {
        $this->is_recommended = 1;
        $this->save();
    }

    public function unrecommend()
    {
        $this->is_recommended = 0;
        $this->save();
    }

    public function toggleRecommend($value)
    {
        if ($value == null) {
            return $this->recommend();
        }
        return $this->unrecommend();
    }

    public function scopeRecommended($query)
    {
        return $query->where("is_recommended", 1);
    }

    public function scopeUnrecommended($query)
    {
        return $query->where("is_recommended", 0);
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


