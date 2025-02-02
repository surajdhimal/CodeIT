<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function home() {
        $companies = Company::all();
        // return $companies;
        return view('welcome', compact('companies'));
    }

    public function company(){
        $companies = Company::all();
        return view("company_list", compact('companies'));
    }

    public function post_company(Request $request){
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
    }
}
