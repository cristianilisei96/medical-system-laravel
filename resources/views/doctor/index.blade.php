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
            There are {{ $doctors->count() }} registered doctors. 
          </p>
                              
          <a class="" href="/doctors/create" style="float:right;">
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
                          <th>ID</th>
                          <th>Name</th>
                          <th>Specialization</th>
                          <th>Town</th>
                          <th>Mobile</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($doctors as $doctor)
                        <tr>
                            <td>{{ $doctor->id }}</td>
                            <td>{{ $doctor->first_name }} {{ $doctor->last_name }}</td>
                            <td>{{ $doctor->specialization->name }}</td>
                            <td>{{ $doctor->town }} </td>
                            <td>{{ $doctor->mobile }}</td>
                            <td>
                              <a href="{{ route('doctors.edit',$doctor->id)}}" style="display: inline;">
                                <button type="submit" class="btn btn-success btn-sm">
                                  <i class="fa fa-edit"></i>
                                </button>
                              </a>  

                              <form action="{{ route('doctors.destroy', $doctor->id)}}" method="post" style="display: inline;">
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