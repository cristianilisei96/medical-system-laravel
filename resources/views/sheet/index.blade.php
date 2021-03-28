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
                There are {{ $sheets->count() }} registered sheets. 
              </p>
                                
                <a class="" href="/sheets/create" style="float:right;">
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
                        <th>Time</th>
                        <th>Date</th>
                        <th>Name Patient</th>
                        <th>Age</th>
                        <th>Town</th>
                        <th>Mobile</th>
                        <th>Sheet State</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($sheets as $sheet)
                      <tr>
                          <td>{{ date('G:i:s', strtotime($sheet->created_at)) }}</td>
                          <td>{{ date('d/m/Y', strtotime($sheet->created_at)) }}</td>
                          <td>{{ $sheet->patient->first_name }} {{ $sheet->patient->last_name }}</td>
                          <td>{{ $sheet->patient->age }}</td>
                          <td>{{ $sheet->patient->town }}</td>
                          <td>{{ $sheet->patient->mobile }}</td>
                          <td>{{ $sheet->mobile }}</td>
                          <td>
                              <a href="{{ route('sheets.show', $sheet->id) }}" style="display: inline;">
                                <button type="submit" class="btn btn-warning btn-sm">
                                  <i class="fa fa-eye"></i>
                                </button>
                              </a>
                              <a href="{{ route('sheets.edit',$sheet->id) }}" style="display: inline;">
                                <button type="submit" class="btn btn-success btn-sm">
                                  <i class="fa fa-edit"></i>
                                </button>
                              </a>  

                              <form action="{{ route('sheets.destroy', $sheet->id)}}" method="post" style="display: inline;">
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