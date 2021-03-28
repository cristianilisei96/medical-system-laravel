@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <p style="margin:0; display: inline-block;">
                        <a href="/users">Users :</a> {{ $users->count() }} 
                    </p>
                                  
                    <a class="" href="/users/create" style="float:right;">
                        <button type="submit" style="border: 0; background: none; cursor: pointer;">
                            <i class="fa fa-plus"></i>
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <p>
                        {{ $users->count() }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <p style="margin:0; display: inline-block;">
                        <a href="/patients">Patients :</a> {{ $patients->count() }}
                    </p>
                                  
                    <a class="" href="/patients/create" style="float:right;">
                        <button type="submit" style="border: 0; background: none; cursor: pointer;">
                            <i class="fa fa-plus"></i>
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <p>
                        {{ $patients->count() }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <p style="margin:0; display: inline-block;">
                        <a href="/doctors">Doctors :</a> {{ $doctors->count() }}
                    </p>

                    <a class="" href="/doctors/create" style="float:right;">
                        <button type="submit" style="border: 0; background: none; cursor: pointer;">
                            <i class="fa fa-plus"></i>
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <p>
                        {{ $doctors->count() }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <p style="margin:0; display: inline-block;">
                        <a href="/sheets">Sheets patients :</a> {{ $sheets->count() }}
                    </p>

                    <a class="" href="/sheets/create" style="float:right;">
                        <button type="submit" style="border: 0; background: none; cursor: pointer;">
                            <i class="fa fa-plus"></i>
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <p>
                        {{ $sheets->count() }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <p style="margin:0; display: inline-block;">
                        <a href="/specializations">Specializations : {{ $specializations->count() }}</a> 
                    </p>

                    <a class="" href="/specializations/create" style="float:right;">
                        <button type="submit" style="border: 0; background: none; cursor: pointer;">
                            <i class="fa fa-plus"></i>
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <p>
                        {{ $specializations->count() }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('include.footer')
@endsection
