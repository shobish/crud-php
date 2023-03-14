<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class restoController extends Controller
{
    public function index()
    {
        return view('Home');
    }
    public function list()
    {
        $data = student::all();
        return view('list', ["data" => $data]);
    }
    public function add(Request $req)
    {
        $insert = new student;
        $insert->name = $req->name;
        $insert->email = $req->email;
        $insert->age = $req->age;
        $insert->class = $req->class;
        $insert->address = $req->address;
        $insert->phone = $req->phone;
        $insert->save();
        $req->session()->flash("success", "added sucess");

        return redirect("list");
    }
    public function delete($id)
    {
        student::find($id)->delete();
        session()->flash("success", "deleted sucess");
        return redirect('list');
    }
    public function edit($id)
    {
        $data = student::find($id);

        return view('edit', ["data" => $data]);
    }
}
