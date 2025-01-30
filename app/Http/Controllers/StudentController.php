<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();
        return view ('students.index')->with('students', $students);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'mobile' => 'required|string|max:15',
        'adress' => 'nullable|string|max:255', // 'nullable' memungkinkan kosong
    ]);

    $input = $request->all();

    // Berikan nilai default jika `adress` kosong
    $input['adress'] = $input['adress'] ?? 'none';

    Student::create($input);

    return redirect('student')->with('flash_message', 'Student added!');
}


    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('students',$student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'student Deleted');
    }
}
