<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CourseController;
use App\Models\Company;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/',[CompanyController::class, "home"])->name("home");

Route::get("/company-list", [CompanyController::class, "company"])->name('company');

Route::get('/about',function(){
    return view('about');
});

Route::get('/course',function(){
    return view('course');
});

Route::post('/post-company', [CompanyController::class, "post_company"])->name('post_company');

Route::post('/post-course', [CourseController::class, "post_course"]);

Route::get('/edit-company/{id}', function($id){
    // return $id;
    $company = Company::find($id);
    // return $company;
    return view('edit-company', compact('company'));
})->name('edit_company');

Route::put('/update-company/{id}', function(Request $request, $id){
    $company = Company::find($id);

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
    $company->update();
    toast("Company Updated Successfully", "success");

    return redirect()->back();
})->name('update_company');

Route::delete('delete-company/{id}', function($id){
    $company = Company::find($id);
    $company->delete();
    toast("Company Deleted Successfully", "success");
    return redirect()->back();
})->name('delete_company');
