<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('add');
    }
    public function store(Request $request)
    {
        //validation part
        $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'class' => 'required|max:2',
            'roll' => 'required|max:3'
        ]);

        //database part
        // Student::create([
        //     'fname' => $request->fname,
        //     'lname' => $request->lname,
        //     'class' => $request->class,
        //     'roll' => ($request->roll),
        // ]);

        $student = new Student();
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->class = $request->class;
        $student->roll = $request->roll;
        $student->save();

        return redirect('/');
    }
    public function list()
    {
        $students = Student::all();
        return view('welcome', [
            'students' => $students
        ]);
    }
    public function edit_view($id)
    {
        $student = Student::where([
            'id' => $id
        ])->first();

        return view('edit_view', [
            'student' => $student
        ]);
    }
    public function edit_store($id, Request $request)
    {
        //validation part
        $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'class' => 'required|max:2',
            'roll' => 'required|max:3'
        ]);
        $student = Student::where([
            'id' => $id
        ])->first();

        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->class = $request->class;
        $student->roll = $request->roll;
        $student->save();


        return redirect("/");
    }

    public function destroy($id)
    {
        Student::where('id', $id)->delete();
        echo ("User Record deleted successfully.");
        return redirect("/");
    }
    public function getData()
    {
        $page = 1;
        if (isset($_GET['page'])) $page = (int)$_GET['page'];
        $page = ($page - 1) * 10 + 1;
        $students = Student::paginate(10);
        return view('welcome', compact('students', 'page'));
    }
}
