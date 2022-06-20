<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://www.shibajidebnath.com</loc>
        <lastmod>2005-01-01</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
    @foreach ($pages as $page)
    @if($page->slug == 'home')@php continue; @endphp @endif
    <url>
        <loc>http://www.shibajidebnath.com/{{$page->slug}}</loc>
        <lastmod>{{$page->post_modified->format('Y-m-d')}}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>
    @endforeach
    @foreach ($posts as $post)
    <url>
        <loc>http://www.shibajidebnath.com/{{$post->slug}}</loc>
        <lastmod>{{$post->post_modified->format('Y-m-d')}}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
     </url>
    @endforeach

    {{-- Tutorial Fetch By Category --}}
    @foreach ($categories as $cat)
        @if($cat->meta->ispublished == "Publish" && $cat->meta->ispaid == "Free")
            <url>
                <loc>http://www.shibajidebnath.com/tutorial/{{$cat->slug}}</loc>
                {{-- <lastmod>{{$tutorial->post_modified->format('Y-m-d')}}</lastmod> --}}
                <changefreq>monthly</changefreq>
                <priority>0.8</priority>
            </url>
        @endif
    @endforeach

    @foreach ($tutorials as $tutorial)
            @php
                $taxo = $tutorial->taxonomies()->first();
                // dd($taxo->meta->ispublished);
            @endphp
            @if($taxo->meta->ispublished)
                <url>
                    <loc>http://www.shibajidebnath.com/tutorial/{{$taxo->slug}}/{{$tutorial->slug}}</loc>
                    <lastmod>{{$tutorial->post_modified->format('Y-m-d')}}</lastmod>
                    <changefreq>monthly</changefreq>
                    <priority>0.8</priority>
                </url>
            @endif
    @endforeach
    {{-- Tutorial Fetch By Category --}}

    {{-- Differant Segment--}}
    @foreach ($trainings as $training)
    <url>
        <loc>http://www.shibajidebnath.com/trainings/{{$training->slug}}</loc>
        <lastmod>{{$training->post_modified->format('Y-m-d')}}</lastmod>
        <changefreq>daily</changefreq>
        <priority>{{ rand (0*10, 1*10) / 10 }}</priority>
     </url>
    @endforeach

    {{-- Differant Segment--}}
    @foreach ($services as $service)
    <url>
        <loc>http://www.shibajidebnath.com/services/{{$service->slug}}</loc>
        <lastmod>{{$service->post_modified->format('Y-m-d')}}</lastmod>
        <changefreq>daily</changefreq>
        <priority>{{ rand (0*10, 1*10) / 10 }}</priority>
     </url>
    @endforeach
</urlset>
