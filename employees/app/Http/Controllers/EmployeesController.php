<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Company;
use App\Position;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $company = Company::where('id', $request->query('cid'))->first();

        $this->authorize('update', $company);

        return view('employees.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $company = Company::where('id', $request->query('cid'))->first();

        $this->authorize('update', $company);

        $positions = Position::all();

        return view('employees.create', compact(['company', 'positions']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = Company::where('id', $request->input('company_id'))->first();
        
        $this->authorize('update', $company);

        $employee = new Employee();

        $employee->company_id = $company->id;
        $employee->position_id = (int)$request->input('position_id');
        $employee->name = $request->input('name');

        $employee->save();

        return redirect('/employees?cid='.$company->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $this->authorize('update', $employee);

        return view('employees.show', compact('employee'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $this->authorize('update', $employee);

        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $this->authorize('update', $employee);

        $employee->update($request->only(['name']));
     
        return redirect('/employees?cid='.$employee->company->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Employee $employee)
    {
        $this->authorize('update', $employee);
        
        $employee->delete();

        return redirect('/employees?cid='.$request->input('company_id'));
    }
}
