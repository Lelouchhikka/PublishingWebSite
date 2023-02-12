<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teachers=Teacher::with('photos')->get();
        $journals=Journal::with('photos')->get();
        $students=Student::with('photos')->get();

        return view('home')->with(['students'=>$students,
            'teachers'=>$teachers,'journals'=>$journals]);
    }
    public function teachers(){
        $teachers=Teacher::with('photos')->paginate(6);
        return view('teachers')->with(['teachers'=>$teachers]);
    }
    public function students(){
        $students=Student::with('photos')->paginate(6);
        return view('students')->with(['students'=>$students]);
    }
    public function journals(){
        $journals=Journal::with('photos')->paginate(6);
        return view('journals')->with(['journals'=>$journals]);
    }
    public function teacher($id)
    {
        $teacher = Teacher::find($id);
        if (!$teacher) {
            abort(404);
        }
        return view('teacher',compact('teacher'));
    }
    public function about(){
        return view('aboutUs');
    }
}
