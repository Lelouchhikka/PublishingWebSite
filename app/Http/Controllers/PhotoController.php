<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();

        return view('photos.index', compact('photos'));
    }
    public function create()
    {
        $photo = new Photo();
        return view('photos.form', compact('photo'));
    }
    public function show($id)
    {
        $photo = Photo::find($id);
        if (!$photo) {
            abort(404);
        }
        return view('photos.show',compact('photo'));
    }
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->back();
    }
    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|image|max:5140',
        ]);

        $path = $request->file('path')->store('photos',['disk' => 'public']);

        $photo = Photo::create([
            'path' => $path,
            'imageable_id'=>$request->imageable_id,
            'imageable_type'=>$request->imageable_type
        ]);

        return redirect()->route('photos.show', $photo);
    }

    public function edit(Photo $photo)
    {

        return view('photos.edit', compact('photo'));
    }

    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'path' => 'sometimes|required|image|max:1024',
        ]);

        if ($request->hasFile('path')) {
            Storage::delete($photo->path);
            $path = $request->file('path')->store('photos');
            $photo->path = $path;
        }

        $photo->save();

        return redirect()->route('photos.show', $photo);
    }
}
