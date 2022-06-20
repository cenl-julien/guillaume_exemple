@extends('layout')

@section('content')

<h1>Salut guix !</h1>

<h2>{{$texte}}</h2>

<ul>
    @foreach($jeux_videos as $jv)
        <li>{{$jv->nom}} - {{$jv->console->nom}}</li>
    @endforeach
</ul>

<!-- <a href="{{ url('jeux_videos/15') }}" class="btn btn-danger">  -->
<a href="{{ route('jeux_videos.show', 15) }}" class="btn btn-danger">
    Test
</a>

<a href="{{ route('jeux_videos.index') }}" class="btn btn-primary">
    Jeux Video
</a>

<!-- url('chemin_de_ton_url') -->
<!-- route('nom_de_ta_route') -->

@endsection