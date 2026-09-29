
    @extends('layouts.main')

    @section('content')
    <h1>Halaman Profil</h1>
    <p>
        Nama : {{ $name }} <br>
        NIM  : {{ $nim }} <br>
        Prodi : {{ $prodi }} <br>
        <img src="images/{{ $gambar }}" width="200px"></img>
    
    @endsection
    
