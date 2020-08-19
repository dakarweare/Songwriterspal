@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('album.create') }}" class="btn btn-primary pull-right">Create Album</a>
                    <h1>Albums</h1>
                    @foreach($albums as $album)
                        <a href="{{ route('album.show', ['album'=>$album->id]) }}">{{$album->album_name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
