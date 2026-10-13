@extends ('layouts.main')

@section ('content')
<div class ="text-center">
        <h2>{{$berita["JUDUL"]}}</h2>
        <h5>Penulis : {{$berita["PENULIS"]}}</h5>
</div>
<div class = "text-justify">
    <p>{{$berita["KONTEN"]}}</p>
</div>

<a href ="/berita"> KEMBALI </a>
@endsection       
