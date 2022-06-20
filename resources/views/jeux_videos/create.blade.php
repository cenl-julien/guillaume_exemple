CREATION !

@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif

<form method="POST" action="{{route('jeux_videos.store')}}">
	@csrf


	<select name="console_id">
		@foreach($consoles as $console)
			<option value="{{$console->id}}">{{$console->nom}}</option>
		@endforeach
	</select>

	<input type="text" name="nom">
	<input type="text" name="description">

	<input type="submit" name="ENREGISTRER">
</form>