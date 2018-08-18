<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');   
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::simplePaginate(5);
        return view('companies.index', compact(['companies']) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'logo' => 'dimensions:min_width=100,min_height=100'
        ]);

        $company = new Company;
        $company->name = request('name');
        $company->email = request('email');

        $path = $request->file('logo')->store('images/logos');
        
        $company->logo = $path;
        $company->website = request('website');
        $company->save();

        return redirect('companies')->with('status', 'New company added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies/edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $this->validate($request, [
            'email' => 'email',
        ]);

        $company = Company::find($company->id); // important USE ID!!!
        $company->name = request('name');
        $company->email = request('email');
        $company->website = request('website');

        // dd($company);

        $company->save();

        return redirect('/')->with('status', 'Company was changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->destroy($company->id);

        return redirect('/')->with('status', 'Company was deleted');
    }
}
