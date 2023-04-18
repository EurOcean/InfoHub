<div class="mt-4" x-show="tab === 'robots.txt'">
    <pre>
        <code class="language-html text-xs">
    Sitemap: {{ url('/')}}/sitemap.xml
    User-agent: *
    Disallow: /</code>
    </pre>
    <div class="mt-8 flex items-center justify-end space-x-4">
        <a class="bg-primary-green px-8 py-2 text-white font-bold rounded shadow" href="{{ url('/robots.txt') }}" target="_blank">Go to robots.txt</a>
    </div>
</div>
