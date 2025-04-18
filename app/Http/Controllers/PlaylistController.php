<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index() {
        $playlists = Playlist::all();
        return view('playlists.index', compact('playlists'));
    }
    
    public function show($id) {
        $playlist = Playlist::with('videos')->findOrFail($id);
        return view('playlists.show', compact('playlist'));
    }


    public function create()
    {
        return view('playlists.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Playlist::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('playlists.index')->with('success', 'Playlist created successfully!');
    }
}
