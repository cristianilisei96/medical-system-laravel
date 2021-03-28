<!-- index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">

    <div class="col-md-12 mb-4">
        
      @include('include.messages')
        
      <div class="card">

        <div class="card-header">

          <p style="margin:0; display: inline-block;">
            There are {{ $patients->count() }} registered patients. 
          </p>
                                
          <a class="" href="/patients/create" style="float:right;">
            <button type="submit" style="border: 0; background: none; cursor: pointer;">
              <i class="fa fa-plus"></i>
            </button>
          </a>

        </div>
                              
        <div class="card-body">

          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Name patient</th>
                  <th>Age</th>
                  <th>Address</th>
                  <th>Town</th>
                  <th>County</th>
                  <th>Mobile</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                      @foreach($patients as $patient)
                      <tr>
                          <td>{{ $patient->first_name }} {{$patient->last_name}}</td>
                          <td>{{ $patient->age }}</td>
                          <td>{{ $patient->address }}</td>
                          <td>{{ $patient->town }}</td>
                          <td>{{ $patient->county }}</td>
                          <td>{{ $patient->mobile }}</td>
                          <td>
                              <a href="{{ route('patients.show', $patient->id) }}" style="display: inline;">
                                <button type="submit" class="btn btn-warning btn-sm">
                                  <i class="fa fa-eye"></i>
                                </button>
                              </a>
                              <a href="{{ route('patients.edit',$patient->id) }}" style="display: inline;">
                                <button type="submit" class="btn btn-success btn-sm">
                                  <i class="fa fa-edit"></i>
                                </button>
                              </a>  

                              <form action="{{ route('patients.destroy', $patient->id)}}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                  <i class="fa fa-trash"></i>
                                </button>
                              </form>      
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              </div> 
        </div>
    </div>
  <div>
</div>

@include('include.footer')
@endsection