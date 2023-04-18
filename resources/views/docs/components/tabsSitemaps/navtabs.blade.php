<nav class="space-x-6 uppercase font-bold text-primary-blue text-sm header-tabs">
    <a :class="{ 'border-b border-b-2 border-teal-400': tab === 'robots.txt' }" @click.prevent="tab = 'robots.txt'; window.location.hash = 'robots.txt'" href="#">Robots</a>
    <a :class="{ 'border-b border-b-2 border-teal-400': tab === 'sitemap.xml' }" @click.prevent="tab = 'sitemap.xml'; window.location.hash = 'sitemap.xml'" href="#">Sitemap Index</a>
    <a :class="{ 'border-b border-b-2 border-teal-400': tab === 'sitemapProjects' }" @click.prevent="tab = 'sitemapProjects'; window.location.hash = 'sitemapProjects'" href="#">Sitemap Projects</a>
    <a :class="{ 'border-b border-b-2 border-teal-400': tab === 'sitemapVessels' }" @click.prevent="tab = 'sitemapVessels'; window.location.hash = 'sitemapVessels'" href="#">Sitemap Vessels</a>
    <a :class="{ 'border-b border-b-2 border-teal-400': tab === 'sitemapOrganizations' }" @click.prevent="tab = 'sitemapOrganizations'; window.location.hash = 'sitemapOrganizations'" href="#">Sitemap Organizations</a>
</nav>
