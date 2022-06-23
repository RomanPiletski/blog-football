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

    const NO_IMAGE = 'uploads/no-image.png';

    protected $fillable = [
        "title",
        "description",
        "content",
        "image",
        "is_publish",
        "is_recommended",
        "category_id",
        "user_id",
        "description",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
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
            $this->attributes["image"] = $value->store("uploads");
        }
    }

    public function getImageAttribute($value)
    {
        return $value ?? self::NO_IMAGE;
    }

    public function getCategoryTitle()
    {
        return ($this->category != null)
            ? $this->category->title
            : "Нет категории";
    }

    public function getTagsTitle()
    {
        return (!$this->tags->isEmpty())
            ? implode(', ', $this->tags->pluck('title')->all())
            : "Нет тегов";
    }

    public function hasPrevious()
    {
        return self::where("id", "<", $this->id)->max("id");
    }

    public function getPrevious()
    {
        $postID = $this->hasPrevious();
        return self::find("$postID");
    }

    public function hasNext()
    {
        return self::where("id", ">", $this->id)->min("id");
    }

    public function getNext()
    {
        $postID = $this->hasNext();
        return self::find("$postID");
    }

    public function related()
    {
        return self::all()->except($this->id);
    }

    public function hasCategory()
    {
        return $this->category != null ? true : false;
    }

    public static function getPopularPosts()
    {
        return self::orderBy("views", "desc")->take(3)->get();
    }

    public static function getFeaturedPosts()
    {
        return self::where("is_recommended", 1)->take(3)->get();
    }

    public static function getRecentPosts()
    {
        return self::orderBy("created_at", "desc")->take(3)->get();
    }

    public function getComments(){
        return $this->comments->where("is_publish", 1)->all();
    }

}


