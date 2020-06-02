<?php

namespace Tests\Feature\Front;

use App\PageSeo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SitemapTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        PageSeo::create(['page_url' => 'component/alert']);
    }

    /** @test */
    public function get_sites_returns_200_status()
    {
        $this->get('/sitemap.xml')
            ->assertStatus(200);
    }

    /** @test */
    public function article_sitemap_returns_200_status()
    {
        $this->get('/component-sitemap.xml')
            ->assertStatus(200);
    }
}
