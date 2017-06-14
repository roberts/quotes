<?php 
echo '<?xml version="1.0" encoding="UTF-8"?>'; 
$now = date('c',time()); 
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://tipoff.com</loc>
        <lastmod><?php echo $now; ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://tipoff.com/quotes</loc>
        <lastmod><?php echo $now; ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://tipoff.com/books</loc>
        <lastmod><?php echo $now; ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
        <url>
        <loc>https://tipoff.com/login</loc>
        <lastmod><?php echo $now; ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
        <url>
        <loc>https://tipoff.com/register</loc>
        <lastmod><?php echo $now; ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
</urlset>