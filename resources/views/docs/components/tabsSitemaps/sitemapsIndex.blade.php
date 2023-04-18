<div class="mt-4" x-show="tab === 'sitemap.xml'">
    <pre>
        <code class="language-xml-doc text-xs">
    &lt;sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"&gt;
        &lt;sitemap&gt;
            &lt;loc&gt;{{ url('/') }}/sitemap/projects&lt;/loc&gt;
        &lt;/sitemap&gt;
        &lt;sitemap&gt;
            &lt;loc&gt;{{ url('/') }}/sitemap/organizations&lt;/loc&gt;
        &lt;/sitemap&gt;
        &lt;sitemap&gt;
            &lt;loc&gt;{{ url('/') }}/sitemap/vessels&lt;/loc&gt;
        &lt;/sitemap&gt;
    &lt;/sitemapindex&gt;</code>
  </pre>
  <div class="mt-8 flex items-center justify-end space-x-4">
        <a class="bg-primary-green px-8 py-2 text-white font-bold rounded shadow" href="{{ url('/sitemap.xml') }}" target="_blank">Go to sitemap index</a>
    </div>
</div>
