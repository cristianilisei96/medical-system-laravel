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
                There are {{$specializations->count()}} registered specializations. 
              </p>
                                
                <a class="" href="/specializations/create" style="float:right;">
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
                        <th></th>
                        <th>Specialization</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($specializations as $specialization)
                      <tr>
                          <td>#{{ $specialization->id }}</td>
                          <td>{{ $specialization->name }}</td>
                          <td>
                              <a href="{{ route('specializations.edit',$specialization->id)}}" style="display: inline;">
                                <button type="submit" class="btn btn-success btn-sm">
                                  <i class="fa fa-pencil"></i>
                                </button>
                              </a>  
                              <form action="{{ route('specializations.destroy', $specialization->id)}}" method="post" style="display: inline;">
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