<div class="mt-4" x-show="tab === 'sitemapOrganizations'">
    <pre>
        <code class="language-xml-doc text-xs">
    &lt;urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"&gt;
        ...
        &lt;url&gt;
            &lt;loc&gt;{{url('/')}}/organization/2&lt;/loc&gt;
            &lt;lastmod>2022-02-17T11:57:30+00:00&lt;/lastmod&gt;
            &lt;changefreq>daily&lt;/changefreq&gt;
        &lt;/url&gt;
        &lt;url&gt;
            &lt;loc&gt;{{url('/')}}/organization/1&lt;/loc&gt;
            &lt;lastmod>2022-02-17T11:57:30+00:00&lt;/lastmod&gt;
            &lt;changefreq>daily&lt;/changefreq&gt;
        &lt;/url&gt;
        ...
    &lt;/urlset&gt;
    </code>
  </pre>
  {{-- <div class="mt-8 flex items-center justify-end space-x-4">
        <a class="bg-primary-green px-8 py-2 text-white font-bold rounded shadow" href="{{ url('/sitemap/organizations') }}" target="_blank">Go to sitemap organizations</a>
    </div> --}}
</div>
