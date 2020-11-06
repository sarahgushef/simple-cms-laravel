<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;


class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();


        return view('student.index', [
            'students' => $students
        ]);
    }

    public function create(Request $request)
    {
        Student::create($request->all());

        return redirect('/students')->with('success', 'Data berhasil ditambah');
    }
}
