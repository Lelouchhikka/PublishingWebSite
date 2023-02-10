<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'experience'=>'required',
            'description' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5140',
        ]);
        $Teacher = Teacher::create($request->all());
        if ($request->hasFile('photos')) {
            foreach ($request->photos as $photo) {
                $path = $photo->store('photos',['disk' => 'public']);
                $Teacher->photos()->create(['path' => $path]);
            }
        }

        return redirect()->route('teachers.index');
    }

    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
            'experience'=>'required',
            'description' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5140',
        ]);
        $Teacher->update($request->all());

        if ($request->hasFile('photos')) {
            foreach ($request->photos as $photo) {
                $path = $photo->store('photos');
                $Teacher->photos()->create(['path' => $path]);
            }
        }

        return redirect()->route('teachers.index');
    }

    public function destroy(Teacher $Teacher)
    {
        $Teacher->delete();
        return redirect()->route('teachers.index');
    }

}
