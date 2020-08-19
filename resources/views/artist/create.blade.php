@extends ("layout")

@section ("content")
    <h1>Create Artist</h1>

    <form action="{{ route('artist.store') }}" method="POST">
    @csrf
    <label>Artist Name</label>
    <input type="text" name="name" />
    <input type="submit" value="Sumbit" />
    </form>
@endsection