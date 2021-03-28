<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
  

        return view('test.index');
    }

}