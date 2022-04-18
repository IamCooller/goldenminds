{{ Request::header('Content-Type : text/xml') }}
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($news as $post)
    <url>
        <loc>{{ url('/press-center') }}/{{$post->id}}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach($structura as $post)
    <url>
        <loc>{{ url('/structure') }}/</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach($mainstream as $post)
    <url>
        <loc>{{ url('/mainstream') }}/</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach($license as $post)
    <url>
        <loc>{{ url('/license') }}/</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach($ISO as $post)
    <url>
        <loc>{{ url('/ISO') }}/</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach($history as $post)
    <url>
        <loc>{{ url('/history') }}/</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach($guidance as $post)
    <url>
        <loc>{{ url('/guidance') }}/{{$post->id}}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach($department as $post)
    <url>
        <loc>{{ url('/department') }}/{{$post->id}}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach($vacancy as $post)
    <url>
        <loc>{{ url('/vacancy') }}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach($vacancy as $post)
    <url>
        <loc>{{ url('/regulations') }}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach($projects as $post)
    <url>
        <loc>{{ url('/projects') }}/{{$post->id}}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach($vacancy as $post)
    <url>
        <loc>{{ url('/constitutive') }}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach($tenders as $post)
    <url>
        <loc>{{ url('/tenders') }}/{{$post->id}}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @foreach($contacts as $post)
    <url>
        <loc>{{ url('/contacts') }}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach

</urlset>



