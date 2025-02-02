<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function post_course(Request $request){
        // return $request->all();
        // dd($request->all());
        $request->validate([
           'name' => 'required|max:255',
           'price'=> 'required|numeric|min:1',
           'image' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);
    
        $course = new Course();
        $course->name = $request->name;
        $course->price = $request->price;
        $file = $request->image;
        if ($file) {
            $fileName = time() . "." . $file->getClientOriginalExtension();
            $file->move('images', $fileName);
            $course->image = "images/$fileName";
        }
        $course->save();
        return redirect()->back();
    }
}
