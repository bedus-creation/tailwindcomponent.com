<?php

namespace App;

use Aammui\LaravelMedia\Traits\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Editor extends Model
{
    use HasMedia;

    protected $fillable = ['user_id', 'slug', 'title', 'description', 'code', 'status'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function pageseo()
    {
        return $this->hasOne(PageSeo::class, 'page_url', 'slug');
    }

    public function scopeFeatured()
    {
        return $this->where('status', 'Published');
    }

    public function link()
    {
        return Str::contains($this->slug, 'editors') ? $this->slug : "editors/$this->slug";
    }

    public function getCoverAttribute()
    {
        return optional(optional($this->fromCollection('cover')->getMedia())->first())->link()
            ?? url("/assets/docs/master/image-01.jpg");
    }
}
