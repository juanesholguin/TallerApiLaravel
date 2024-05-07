<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMusicRequest;
use App\Http\Requests\UpdateMusicRequest;
use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Music::with('category')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMusicRequest $request)
    {
        $music = Music::create($request->all());
        return response()->json($music, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Music $music)
    {
        return response()->json($music->load('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMusicRequest $request, Music $music)
    {
        $music->update($request->validated());
        return response()->json($music->load('category'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Music $music)
    {
        $music->delete();
        return response()->json(null, 204);
    }
}
