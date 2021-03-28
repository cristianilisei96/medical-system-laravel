<!-- edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        
        <div class="card-header">
          Edit Specialization #{{ $specialization->id }}
        </div>
    
      <div class="card-body">

          <form method="post" action="{{ route('specializations.update', $specialization->id) }}">
            <div class="col-md-6" style="float:left;">
              <div class="form-group">
                  @csrf
                  @method('PATCH')
                  <label for="name">Name :</label>
                  <input type="text" class="form-control" name="name" value="{{$specialization->name}}"/>
              </div>
            </div>
            <div class="col-md-6" style="float:left;">
              <button type="submit" class="btn btn-primary" style="margin-top: 31px;">Update specialization</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

@include('include.footer')
@endsection