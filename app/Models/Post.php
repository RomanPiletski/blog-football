<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    const NO_IMAGE = '/uploads/no-image.png';
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
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
        $this->is_publish = true;
        $this->save();
    }

    public function unpublish()
    {
        $this->is_publish = false;
        $this->save();
    }

    public function togglePublish()
    {
        if ($this->is_publish == false) {
            return $this->publish();
        }
        return $this->unpublish();
    }

    public function recommend()
    {
        $this->is_recommended = true;
        $this->save();
    }

    public function unrecommend()
    {
        $this->is_recommended = false;
        $this->save();
    }

    public function toggleRecommend()
    {
        if ($this->is_recommended == false) {
            return $this->recommend();
        }
        return $this->unrecommend();
    }

    public function scopeRecommended($query)
    {
        return $query->where("is_recommended", true);
    }

    public function scopeUnrecommended($query)
    {
        return $query->where("is_recommended", false);
    }

    public function scopePublished($query)
    {
        return $query->where("is_publish", true);
    }

    public function scopeUnpublished($query)
    {
        return $query->where("is_publish", false);
    }

    public function setImageAttribute($value)
    {
        if ($value instanceof UploadedFile) {

            if ($this->image !== null && Storage::exists($this->image)) {
                Storage::delete($this->image);
            }

            return $value->store('uploads');
        }
    }

    public function getImageAttribute($value)
    {
        return $value ?? self::NO_IMAGE;
    }
}


