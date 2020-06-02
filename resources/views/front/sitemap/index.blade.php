<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{url('component-sitemap.xml')}}</loc>
        <lastmod>{{$components->updated_at->format('Y-m-d\TH:i:s+05:00')}}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{url('design-sitemap.xml')}}</loc>
        <lastmod>{{$design->updated_at->format('Y-m-d\TH:i:s+05:00')}}</lastmod>
    </sitemap>
</sitemapindex>
