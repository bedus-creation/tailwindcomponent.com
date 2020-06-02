<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Aammui\LaravelMedia\Traits\HasMedia;

class PageSeo extends Model
{
    use HasMedia;

    protected $fillable = [
        "page_url",
        "page_title",
        "meta_keywords",
        "meta_description"
    ];

    public function getCoverAttribute()
    {
        return optional(optional($this->fromCollection('cover')->getMedia())->first())->link()
            ?? url("/assets/docs/master/image-01.jpg");
    }

    public function link()
    {
        return url($this->page_url);
    }
}
