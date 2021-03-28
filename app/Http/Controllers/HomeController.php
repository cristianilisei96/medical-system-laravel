<?php

namespace App\Http\Controllers;

use App\User;
use App\Doctor;
use App\Patient;
use App\Specialization;
use App\Sheet;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $patients = Patient::all();
        $doctors = Doctor::all();
        $specializations = Specialization::all();
        $sheets = Sheet::all();

        return view('dashboard', compact('users', 'patients', 'doctors', 'specializations', 'sheets'));
    }
}
