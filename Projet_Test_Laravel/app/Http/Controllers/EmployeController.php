<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Resources\EmployeResource as EmployeResource ;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get All Employees Details
        $employee = Employe::all();
        return new EmployeResource($employee);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //creation d'un nouveau employee
        $employee = new Employe();
        $employee->name = $request->input('name');
        $employee->address = $request->input('address');
        $employee->phone_number = $request->input('phone_number');
        $employee->salaire = $request->input('salaire');
        $employee->photo = $request->input('photo');
        $employee->save();
        return new EmployeResource($employee);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get One Employee Details
        $employee  = Employe::findOrFail($id);
        return new EmployeResource($employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //Update employee
        $employee = Employe::findOrFail($id);
        $employee->name = $request->input('name');
        $employee->address = $request->input('address');
        $employee->phone_number = $request->input('phone_number');
        $employee->photo = $request->input('photo');
        $employee->salaire = $request->input('salaire');
        $employee->save();
        return new EmployeResource($employee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete un employee
        $employee = Employe::findOrFail($id);
        if($employee->delete());
    }
}
