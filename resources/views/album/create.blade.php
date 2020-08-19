@extends ("layout")

@section ("content")
    <h1>Create Album</h1>

    <form action="{{ route('album.store') }}" method="POST">
    @csrf
    <label>Album Name</label>
    <input type="text" name="name" />
    <input type="submit" value="Sumbit" />
    </form>
@endsection