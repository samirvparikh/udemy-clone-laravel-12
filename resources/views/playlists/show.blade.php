@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $playlist->title }}</h1>
        <p>{{ $playlist->description }}</p>

        <h3 class="mt-4">Videos</h3>
        @forelse ($playlist->videos as $video)
            <div class="mb-4">
                <h5>{{ $video->title }}</h5>
                <video width="640" controls>
                    <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        @empty
            <p>No videos available in this playlist.</p>
        @endforelse

        <a href="{{ route('playlists.index') }}" class="btn btn-secondary mt-3">Back to Playlists</a>
    </div>
@endsection
