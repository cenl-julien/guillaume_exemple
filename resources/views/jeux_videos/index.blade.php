Index de jeux video !

<a href="{{route('jeux_videos.create')}}" class="btn btn-primary">
	Créer un nouveau jeu 
</a>
<ul>
    @foreach($jeux_videos as $jv)
        <li>{{$jv->nom}} - {{$jv->console->marque}} - {{$jv->console->nom}}</li>
    @endforeach
</ul>