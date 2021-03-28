<!-- edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        
        <div class="card-header">
          Patient #{{ $patient->id }}
          <a href="{{ route('patients.edit',$patient->id) }}" style="float: right;">
            <button type="submit" style="border: 0px; background: none; cursor: pointer;">
              <i class="fa fa-edit"></i>
            </button>
          </a> 
        </div>
    
      <div class="card-body">

            <div class="col-md-6" style="float:left;">
              <div class="form-group">
                  @csrf
                  @method('PATCH')
                  <label for="first_name">First Name:</label>
                  <input type="text" class="form-control" name="first_name" value="{{$patient->first_name}}" disabled="" />
              </div>
              <div class="form-group">
                  <label for="last_name">Last Name :</label>
                  <input type="text" class="form-control" name="last_name" value="{{$patient->last_name}}" disabled />
              </div>
              <div class="form-group">
                  <label for="cnp">Personal identification number :</label>
                  <input type="number" class="form-control" name="cnp" value="{{$patient->cnp}}" disabled />
              </div>
              <div class="form-group">
                  <label for="birthday">Birthday :</label>
                  <input type="date" class="form-control" name="birthday" value="{{$patient->birthday}}" disabled />
              </div>
              <div class="form-group">
                <label for="quantity">Gender :</label>
                <select class="custom-select w-50 d-block" name="gender" disabled>
                    <option value="Selectati.." <?php if($patient->gender== "Selectati..") echo "selected"; ?>>Select..</option>
                    <option value="Masculin" <?php if($patient->gender== "Masculin") echo "selected"; ?>>Male</option>
                    <option value="Feminin" <?php if($patient->gender== "Feminin") echo "selected"; ?>>Female</option>
                </select>
              </div>
            </div>
            <div class="col-md-6" style="float:left;">
              <div class="form-group">
                <label for="address">Address :</label>
                <input type="text" class="form-control" name="address" value="{{$sheet->patient->name}}" disabled>
              </div>
              <div class="form-group">
                <label for="town">Town :</label>
                <input type="text" class="form-control" name="town" value="{{$patient->town}}" disabled>
              </div>
              <div class="form-group">
                <label for="county">County :</label>
                <input type="text" class="form-control" name="county" value="{{$patient->county}}" disabled>
              </div>
              <div class="form-group">
                <label for="mobile">Mobile :</label>
                <input type="text" class="form-control" name="mobile" value="{{$patient->mobile}}" disabled>
              </div>
              <a href="{{ route('patients.edit',$patient->id) }}">
                <button type="submit" class="btn btn-primary" style="margin-top: 31px;">Edit patient data</button>
              </a>
            </div>

        </div>
      </div>
    </div>
  </div>
</div>

@include('include.footer')
@endsection