<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5140',
        ]);
        $student = Student::create($request->all());
        if ($request->hasFile('photos')) {
            foreach ($request->photos as $photo) {
                $path = $photo->store('photos',['disk' => 'public']);
                $student->photos()->create(['path' => $path]);
                $img =Image::make(public_path('/storage/'.$student->photos()->first()->path));
                $img->resize(300, 225, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/storage/'.$student->photos()->first()->path));
            }
        }

        return redirect()->route('students.index');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5140',
        ]);
        $student->update($request->all());

        if ($request->hasFile('photos')) {
            foreach ($request->photos as $photo) {
                $path = $photo->store('photos',['disk' => 'public']);
                $student->photos()->create(['path' => $path]);
                $img =Image::make(public_path('/storage/'.$student->photos()->first()->path));
                $img->resize(300, 225, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/storage/'.$student->photos()->first()->path));
            }
        }

        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }

}
