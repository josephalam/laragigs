<h1>{{$heading}}</h1>

@if(count($listings)==0)
    <p>no listings found</p>
@endif

@foreach ($listings as $listing)

<h2><a href="/listings/{{ $listing['id']}}"> {{ $listing['title']}}</a>
<br>
{{$listing['description']}}

@endforeach


