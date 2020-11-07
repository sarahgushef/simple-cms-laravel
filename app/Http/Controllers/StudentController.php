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

    public function updatePage($id)
    {
        $student = Student::find($id);

        // dd($student); // Lihat di browser, bagian original, nanti akan terlihat nama siswanya.

        return view('student/update', [
            'student' => $student
        ]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->update($request->all());

        return redirect('students')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/students')->with('success', 'Siswa berhasil dihapus');
    }
}
