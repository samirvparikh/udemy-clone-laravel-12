<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::with('playlist')->latest()->get();
        return view('videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $playlists = Playlist::all();
        return view('videos.create', compact('playlists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'playlist_id' => 'required|exists:playlists,id',
            'video' => 'required|mimes:mp4,avi,mov|max:51200' // 50MB max
        ]);
    
        $path = $request->file('video')->store('public/videos');
    
        Video::create([
            'title' => $request->title,
            'playlist_id' => $request->playlist_id,
            'video_path' => Storage::url($path)
        ]);
    
        return redirect()->route('videos.index')->with('success', 'Video uploaded.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
