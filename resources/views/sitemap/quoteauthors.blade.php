<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($quoteauthors as $quoteauthor)
        <url>
            <loc>https://tipoff.com{{ $quoteauthor->path() }}</loc>
            <lastmod>{{ $quoteauthor->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>