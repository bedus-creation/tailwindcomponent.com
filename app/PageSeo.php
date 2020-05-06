<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageSeo extends Model
{
    protected $fillable = [
        "page_url",
        "page_title",
        "meta_keywords",
        "meta_description"
    ];
}
