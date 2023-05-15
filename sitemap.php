<?php 
header('Content-type: application/xml');
echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
echo "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";
?>

<url>
<loc>https://<?php echo $_SERVER['HTTP_HOST'];?></loc>
<lastmod><?php echo date('Y-m-d\TH:i:s+00:00');?></lastmod>
<changefreq>hourly</changefreq>
<priority>1</priority>
</url>

<?php
$html = file_get_contents('https://api-hh.blogspot.com/sitemap.xml');
$html = str_replace('https://', "<br/>https://", $html);
$html = str_replace('api-hh.blogspot.com/2023/04', $_SERVER['HTTP_HOST'], $html);
$all_links = explode("<br/>", $html);

foreach ($all_links as $all_links) {
if (strpos($all_links, 'html') == true) { 
?>    
<url>
<loc><?php echo explode("html", $all_links)['0'];?>html</loc>
<lastmod><?php echo date('Y-m-d\TH:i:s+00:00');?></lastmod>
<changefreq>daily</changefreq>
<priority>0.8</priority>
</url>
<?php
} 
}
?>
</urlset>
