<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class JournalController extends Controller
{
    public function index()
    {
        $journals = Journal::all();
        return view('journals.index', compact('journals'));
    }

    public function create()
    {
        return view('journals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5140',
        ]);
        $journal = Journal::create($request->all());
        if ($request->hasFile('photos')) {
            foreach ($request->photos as $photo) {
                $path = $photo->store('photos',['disk' => 'public']);
                $journal->photos()->create(['path' => $path]);
                $img =Image::make(public_path('/storage/'.$journal->photos()->first()->path));
                $img->resize(300, 225, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/storage/'.$journal->photos()->first()->path));
            }
        }

        return redirect()->route('journals.index');
    }

    public function show(Journal $journal)
    {
        return view('journals.show', compact('journal'));
    }

    public function edit(Journal $journal)
    {
        return view('journals.edit', compact('journal'));
    }

    public function update(Request $request, Journal $Journal)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5140',
        ]);
        $Journal->update($request->all());

        if ($request->hasFile('photos')) {
            foreach ($request->photos as $photo) {
                $path = $photo->store('photos',['disk' => 'public']);
                $Journal->photos()->create(['path' => $path]);
                $img =Image::make(public_path('/storage/'.$Journal->photos()->first()->path));
                $img->resize(300, 225, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/storage/'.$Journal->photos()->first()->path));
            }
        }

        return redirect()->route('journals.index');
    }

    public function destroy(Journal $Journal)
    {
        $Journal->delete();
        return redirect()->route('journals.index');
    }

}
