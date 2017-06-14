<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>https://tipoff.com/sitemap/main</loc>
        <lastmod>{{ $quote->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>https://tipoff.com/sitemap/quoteauthors</loc>
        <lastmod>{{ $quoteauthor->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>https://tipoff.com/sitemap/quotes</loc>
        <lastmod>{{ $quote->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>https://tipoff.com/sitemap/bookauthors</loc>
        <lastmod>{{ $bookauthor->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>https://tipoff.com/sitemap/books</loc>
        <lastmod>{{ $book->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>https://tipoff.com/sitemap/users</loc>
        <lastmod>{{ $user->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>
</sitemapindex>