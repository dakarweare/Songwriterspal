@extends ("layout")

@section ("content")
    <h1>{{ $album->album_name }}</h1>
    <form action="{{ route('song.store') }}" method="POST">
        @csrf
        <input type="hidden" name="album_id" value="{{$album->id}}" />
        <input type="submit" value="Create Song" />
    </form>
    @foreach($songs as $song)
        <a href="#">{{ $song->song_name }}</a>
    @endforeach
@endsection