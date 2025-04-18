@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Upload New Video</div>
    <div class="card-body">
        <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Playlist</label>
                <select name="playlist_id" class="form-control" required>
                    @foreach($playlists as $playlist)
                        <option value="{{ $playlist->id }}">{{ $playlist->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Video Title</label>
                <input type="text" name="title" class="form-control" required />
            </div>

            <div class="mb-3">
                <label>Video File</label>
                <input type="file" name="video" class="form-control" required />
            </div>

            <button type="submit" class="btn btn-primary">Upload Video</button>
        </form>
    </div>
</div>
@endsection
