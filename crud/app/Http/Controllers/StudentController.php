<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function list()
    {
        $data = student::all();
        return view('Student', compact('data'));
    }
    public function addstudent()
    {

        return view('AddStudent');
    }
    public function savestudent(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required',
            'class' => 'required',
            'phone' => 'required'
        ]);

        $name = $req->name;
        $email = $req->email;
        $age = $req->age;
        $class = $req->class;
        $phone = $req->phone;

        $student = new Student();
        $student->name = $name;
        $student->email = $email;
        $student->age = $age;
        $student->class = $class;
        $student->phone = $phone;
        $student->save();
        return redirect()->back()->with('success', 'added successfully');
    }

    public function editstudent($id)
    {
        $data = Student::where('id', '=', $id)->first();

        return view('StudentEdit', compact('data'));
    }
    public function updatestudent(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required',
            'class' => 'required',
            'phone' => 'required'
        ]);

        $id = $req->id;
        $name = $req->name;
        $email = $req->email;
        $age = $req->age;
        $class = $req->class;
        $phone = $req->phone;

        Student::where('id', "=", "$id")->update([
            'name' => $name,
            'email' => $email,
            'age' => $age,
            'class' => $class,
            'phone' => $phone
        ]);
        return redirect()->back()->with('success', 'student updated successfully');
    }
    public function deletestudent($id)
    {
        Student::where('id', "=", "$id")->delete();
        return redirect()->back()->with('success', 'student deleted successfully');
    }
}
