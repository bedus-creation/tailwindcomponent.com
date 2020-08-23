<?php

namespace App\Domain\CMS\Traits;

use App\PageSeo;

/**
 * Page Seo
 */
trait HasSeo
{
    public function pageseo()
    {
        return $this->hasOne(PageSeo::class, 'page_url', 'slug');
    }
}
