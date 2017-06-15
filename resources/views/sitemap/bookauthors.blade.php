<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($bookauthors as $bookauthor)
        <url>
            <loc>https://tipoff.com{{ $bookauthor->path() }}</loc>
            <lastmod>{{ $bookauthor->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>