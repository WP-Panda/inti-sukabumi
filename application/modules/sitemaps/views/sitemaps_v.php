<?php header('Content-type: application/xml; charset="ISO-8859-1"',true);  ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <?php foreach($sitemaps as $row): ?>
   <url>

      <loc><?= base_url($row); ?></loc>
      <priority>1</priority>
   </url>
   <?php endforeach; ?>
</urlset> 