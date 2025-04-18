@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Create New Playlist</div>
    <div class="card-body">
        <form action="{{ route('playlists.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Playlist Title</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Playlist Description</label>
                <textarea class="form-control" name="description" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Playlist</button>
        </form>
    </div>
</div>
@endsection
