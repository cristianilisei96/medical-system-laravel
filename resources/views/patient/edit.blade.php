<!-- edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        
        <div class="card-header">
          Edit Patient #{{ $patient->id }}
        </div>
    
      <div class="card-body">

          <form method="post" action="{{ route('patients.update', $patient->id) }}">
            <div class="col-md-6" style="float:left;">
              <div class="form-group">
                  @csrf
                  @method('PATCH')
                  <label for="first_name">First Name :</label>
                  <input type="text" class="form-control" name="first_name" value="{{$patient->first_name}}"/>
              </div>
              <div class="form-group">
                  <label for="last_name">Last Name :</label>
                  <input type="text" class="form-control" name="last_name" value="{{$patient->last_name}}"/>
              </div>
              <div class="form-group">
                  <label for="cnp">Personal identification number :</label>
                  <input type="number" class="form-control" name="cnp" value="{{$patient->cnp}}"/>
              </div>
              <div class="form-group">
                  <label for="cnp">Birthday :</label>
                  <input type="date" class="form-control" name="birthday" value="{{$patient->birthday}}"/>
              </div>
              <div class="form-group">
                <label for="gender">Gender :</label>
                <select class="custom-select w-50 d-block" name="gender">
                    <option value="Selectati.." <?php if($patient->gender== "Selectati..") echo "selected"; ?>>Select..</option>
                    <option value="Masculin" <?php if($patient->gender== "Masculin") echo "selected"; ?>>Male</option>
                    <option value="Feminin" <?php if($patient->gender== "Feminin") echo "selected"; ?>>Female</option>
                </select>
              </div>
            </div>
            <div class="col-md-6" style="float:left;">
              <div class="form-group">
                <label for="address">Address :</label>
                <input type="text" class="form-control" name="address" value="{{$patient->address}}">
              </div>
              <div class="form-group">
                <label for="town">Town :</label>
                <input type="text" class="form-control" name="town" value="{{$patient->town}}">
              </div>
              <div class="form-group">
                <label for="county">County :</label>
                <input type="text" class="form-control" name="county" value="{{$patient->county}}">
              </div>
              <div class="form-group">
                <label for="mobile">Address :</label>
                <input type="text" class="form-control" name="mobile" value="{{$patient->mobile}}">
              </div>
              <button type="submit" class="btn btn-primary" style="margin-top: 31px;">Update patient data</button>
            </div>
          </form>

        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header">
          Patient records
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
                          <th>Nr. sheet</th>
                          <th>Type</th>
                          <th>Address</th>
                          <th>Town</th>
                          <th>County</th>
                          <th>Mobile</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sheets as $sheet)
                        <tr>
                            <td>#{{ $sheet->id }}</td>
                            <td>{{ $sheet->specialization_id }}</td>
                            <td></td>
                            <td>
                                <a href="{{ route('patients.edit',$patient->id)}}" style="display: inline;">
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
  </div>
</div>

@include('include.footer')
@endsection