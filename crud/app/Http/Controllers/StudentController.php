<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function list()
    {
        $data = student::all();
        return view('Student', ['data' => $data]);
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
            'phone' => 'required',
            'address' => 'required'
        ]);

        $name = $req->name;
        $email = $req->email;
        $age = $req->age;
        $class = $req->class;
        $phone = $req->phone;
        $address = $req->address;

        $student = new Student();
        $student->name = $name;
        $student->email = $email;
        $student->age = $age;
        $student->class = $class;
        $student->phone = $phone;
        $student->address = $address;
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
            'phone' => 'required',
            'address' => 'required'
        ]);

        $id = $req->id;
        $name = $req->name;
        $email = $req->email;
        $age = $req->age;
        $class = $req->class;
        $phone = $req->phone;
        $address = $req->address;

        Student::where('id', "=", "$id")->update([
            'name' => $name,
            'email' => $email,
            'age' => $age,
            'class' => $class,
            'phone' => $phone,
            'address' => $address
        ]);
        return redirect()->back()->with('success', 'student updated successfully');
    }
    public function deletestudent($studentid)
    {

        Student::where('id', $studentid)->delete();

        return redirect()->back()->with('success', 'student deleted successfully');
    }
}
