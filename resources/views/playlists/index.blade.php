@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Playlists</h1>
        <h1 class="mb-4"><a href="{{ route('playlists.create') }}" class="btn btn-primary">Create</a></h1>

        @foreach ($playlists as $playlist)
            <div class="card mb-3">
                <div class="card-body">
                    <h3>{{ $playlist->title }}</h3>
                    <p>{{ $playlist->description }}</p>
                    <a href="{{ route('playlists.show', $playlist->id) }}" class="btn btn-primary">View Playlist</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
