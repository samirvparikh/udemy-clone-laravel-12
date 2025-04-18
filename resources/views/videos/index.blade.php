@extends('layouts.app')

@section('content')
<h3>All Videos</h3>

@foreach($videos as $video)
    <div class="card mb-3">
        <div class="card-header">
            {{ $video->title }} (Playlist: {{ $video->playlist->title }})
        </div>
        <div class="card-body">
            <video width="320" height="240" controls>
                <source src="{{ $video->video_path }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
@endforeach
@endsection
