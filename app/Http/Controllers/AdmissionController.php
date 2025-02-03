<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index(){
        $admissions = Admission::orderBy('id', 'desc')->get();
        return view("admission.index", compact('admissions'));
    }

    public function create(){
        return view('admission.create');
    }

    public function store(Request $request){
        // return $request;
        $admissions = new Admission();

        $admissions->name = $request->name;
        $admissions->phone = $request->phone;
        $admissions->email = $request->email;
        $admissions->course_id = $request->course;
        $admissions->save();
        toast("Record Saved successfully", "success");
        return redirect()->route('admission.index');
    }
}
