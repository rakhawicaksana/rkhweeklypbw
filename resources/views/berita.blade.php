
@extends('layouts.main')

@section('content')
<div class "mt-5">
    @foreach ($beritas as $berita)
    <h2> <a href="berita/{{ $berita['slug'] }}"> {{ $berita ["JUDUL"] }} </a></h2>
    <h5> {{ $berita ["PENULIS"] }}</h5>
    <p> {{ $berita ["KONTEN"] }}</p>
    @endforeach
</div>
@endsection