<?php 
echo '<?xml version="1.0" encoding="UTF-8"?>'; 
$now = date('c',time()); 
?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>https://tipoff.com/sitemap/main</loc>
        <lastmod><?php echo $now; ?></lastmod>
    </sitemap>
    <sitemap>
        <loc>https://tipoff.com/sitemap/quoteauthors</loc>
        <lastmod><?php echo $now; ?></lastmod>
    </sitemap>
    <sitemap>
        <loc>https://tipoff.com/sitemap/quotes</loc>
        <lastmod><?php echo $now; ?></lastmod>
    </sitemap>
    <sitemap>
        <loc>https://tipoff.com/sitemap/users</loc>
        <lastmod><?php echo $now; ?></lastmod>
    </sitemap>
</sitemapindex>