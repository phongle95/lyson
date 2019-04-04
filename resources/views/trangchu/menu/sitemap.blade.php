<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   <url>
      <loc>{{ route('trangchu.pages.trangchu') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
      <loc>{{ route('trangchu.pages.gioithieu') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
      <loc>{{ route('trangchu.pages.dichvu') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
      <loc>{{ route('trangchu.pages.tintuc') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
      <loc>{{ route('trangchu.pages.lienhe') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   @foreach ($tin as $item)
   <url>
      <loc>{{ route('trangchu.chitiet.news',['slug' => str_slug($item->tieuDe),'id'=>$item->id]) }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>0.8</priority>
   </url>
   @endforeach
   @foreach ($travel as $item)
   <url>
      <loc>{{ route('trangchu.chitiet.travel',['slug' => str_slug($item->tenTour),'id'=>$item->id]) }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>0.8</priority>
   </url>
   @endforeach
   @foreach ($hotel as $item)
   <url>
      <loc>{{ route('trangchu.chitiet.hotel',['slug' => str_slug($item->tenHotel),'id'=>$item->id]) }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>0.8</priority>
   </url>
   @endforeach
   @foreach ($car as $item)
   <url>
      <loc>{{ route('trangchu.chitiet.car',['slug' => str_slug($item->todo),'id'=>$item->id]) }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>0.8</priority>
   </url>
   @endforeach
</urlset>
