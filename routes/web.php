<?php

use App\Models\Company;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $companies = Company::all();
    // return $companies;
    return view('welcome', compact('companies'));
})->name("home");

Route::get("/company-list", function(){
    $companies = Company::all();
    return view("company_list", compact('companies'));
})->name('company');

Route::get('/about',function(){
    return view('about');
});

Route::get('/course',function(){
    return view('course');
});

Route::post('/post-company', function(Request $request){
    $company = new Company();

    $company->name = $request->name;
    $company->address = $request->address;
    $company->phone = $request->phone;
    $company->email = $request->email;
    $file = $request->logo;
    if ($file) {
        $fileName = time().".".$file->getClientOriginalExtension();
        $file->move('images', $fileName);
        $company->logo = "images/$fileName";
    }
    $company->save();

    return redirect()->back();
})->name('post_company');

Route::post('/post-course', function(Request $request){
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
});
