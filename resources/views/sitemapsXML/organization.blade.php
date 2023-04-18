<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($institution as $content)
        <url>
            <loc>{{ url('/') }}/organization/{{ Str::replace(' ', '-', strtolower($content->id)) }}</loc>
            <lastmod>{{ $content->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            {{-- <priority>0.9</priority> --}}
        </url>
    @endforeach
</urlset>