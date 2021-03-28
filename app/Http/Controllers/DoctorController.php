<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;
use App\Doctor;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all()->sortByDesc("id");
        $specializations = Specialization::all();

        return view('doctor.index', compact('doctors', 'specializations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specializations = Specialization::all();

        return view('doctor.create', compact('specializations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'specialization_id' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'town' => 'required',
            'mobile' => 'required',
        ]);

        $doctor = Doctor::create($validatedData);

        return redirect('/doctors')->with('success', 'Doctor successfully added to the database');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctors = Doctor::findOrFail($id);
        $specializations = Specialization::all();

        return view('doctor.edit', compact('doctors', 'specializations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'specialization_id' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'town' => 'required',
            'mobile' => 'required',
        ]);

        doctor::whereId($id)->update($validatedData);

        return redirect('/doctors')->with('success', 'Doctor successfully updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return redirect('/doctors')->with('danger', 'Doctor successfully deleted !');
    }
}