<?php

namespace Tests\Feature\Front;

use App\Editor;
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
        Editor::create(['title' => 'asdfasf', 'slug' => 'ad', 'code' => 'as', 'status' => 'Published']);
    }

    /** @test */
    public function get_sites_returns_200_status()
    {
        $this->get('/sitemap.xml')
            ->assertStatus(200);
    }

    /** @test */
    public function components_sitemap_returns_200_status()
    {
        $this->get('/component-sitemap.xml')
            ->assertStatus(200);
    }

    /** @test */
    public function design_sitemap_returns_200_status()
    {
        $this->get('/design-sitemap.xml')
            ->assertStatus(200);
    }
}
