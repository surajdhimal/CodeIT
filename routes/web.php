<?php

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $companies = Company::all();
    // return $companies;
    return view('welcome', compact('companies'));
});

Route::get("/company-list", function(){
    $companies = Company::all();
    return view("company_list", compact('companies'));
});

Route::get('/about',function(){
    return view('about');
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
});
