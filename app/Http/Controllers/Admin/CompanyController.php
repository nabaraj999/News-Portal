<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::first();
        if (!$company) {
            return redirect()->route('admin.company.create');
        }
        return view('admin.company.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => "required|string",
            'email' => "required|email",
            'phone' => "required",
            'logo' => "required|image",
        ]);

        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->youtube = $request->youtube;
        $company->facebook = $request->facebook;
        $company->instagram = $request->instagram;
        $file = $request->logo;
        if ($file) {
            $filename = time() . "." . $file->getClientOriginalExtension();
            $file->move('storage', $filename);
            $company->logo = "storage/$filename";
        }
        $company->save();
        return redirect()->route('admin.company.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::find($id);
        return view('admin.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'name' => "required|string",
            'email' => "required|email",
            'phone' => "required",
            'logo' => "nullable|image",
        ]);

        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->youtube = $request->youtube;
        $company->facebook = $request->facebook;
        $company->instagram = $request->instagram;
        $file = $request->logo;
        if ($file) {
            $filename = time() . "." . $file->getClientOriginalExtension();
            $file->move('images', $filename);
            $company->logo = "images/$filename";
        }
        $company->update();
        return redirect()->route('admin.company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect()->route('admin.company.index');
    }
}
