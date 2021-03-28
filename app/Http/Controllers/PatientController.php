<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Sheet;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $patients = Patient::all()->sortByDesc("id");

        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:5'],
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'cnp' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'town' => 'required',
            'county' => 'required',
            'mobile' => 'required',
        ]);

        $patient = Patient::create($validatedData);

        return redirect('/patients')->with('success', 'Patient added to database successfully !');
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
        $patient = Patient::findOrFail($id);
        $sheets = $patient->sheet;

        return view('patient.show', compact('patient', 'sheets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        $sheets = $patient->sheet;

        return view('patient.edit', compact('patient', 'sheets'));
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
            'cnp' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'town' => 'required',
            'county' => 'required',
            'mobile' => 'required',
        ]);

        patient::whereId($id)->update($validatedData);

        return redirect('/patients')->with('success', 'Patient successfully updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = patient::findOrFail($id);
        $patient->delete();

        return redirect('/patients')->with('danger', 'Patient successfully deleted !');
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $patients = Patient::where('first_name', 'LIKE', "%{$search}%")
            ->orWhere('last_name', 'LIKE', "%{$search}%")
            ->orWhere('cnp', 'LIKE', "%{$search}%")
            ->orWhere('birthday', 'LIKE', "%{$search}%")
            ->orWhere('gender', 'LIKE', "%{$search}%")
            ->orWhere('address', 'LIKE', "%{$search}%")
            ->orWhere('town', 'LIKE', "%{$search}%")
            ->orWhere('county', 'LIKE', "%{$search}%")
            ->orWhere('mobile', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('patient.search', compact('patients'));
    }
}