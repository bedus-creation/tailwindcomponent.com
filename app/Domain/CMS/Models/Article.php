<?php

namespace App\Domain\CMS\Models;

use Illuminate\Database\Eloquent\Model;
use Aammui\LaravelTaggable\Traits\HasCategory;
use Aammui\LaravelTaggable\Traits\HasTag;
use Aammui\LaravelMedia\Traits\HasMedia;
use App\Domain\CMS\Traits\HasSeo;

class Article extends Model
{
    use HasCategory, HasTag,  HasMedia, HasSeo;

    protected $fillable = ['title', 'description', 'slug', 'status', 'type'];

    public function link()
    {
        return $this->slug;
    }
    public function getCoverAttribute()
    {
        return optional(optional($this->fromCollection('cover')->getMedia())->first())->link()
            ?? "/assets/img/logo.png";
    }
}
