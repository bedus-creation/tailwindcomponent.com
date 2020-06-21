<?php

namespace App\Domain\CMS\Models;

use Illuminate\Database\Eloquent\Model;
use App\PageSeo;

class Page extends Model
{
    protected $fillable = [
        'title', 'slug', 'name', 'order', 'description',
    ];

    public function pageseo()
    {
        return $this->hasOne(PageSeo::class, 'page_url', 'slug');
    }
}
