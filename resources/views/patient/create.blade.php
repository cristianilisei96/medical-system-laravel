<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mb-4">
      <div class="card uper">
        <div class="card-header">
              Add patient
        </div>
        <div class="card-body">
                <form method="post" action="{{ route('patients.store') }}">
                  <div class="col-md-6" style="float:left;">
                    <div class="form-group">
                        @csrf
                        <label for="name">First Name :</label>
                        <input type="text" class="form-control" name="first_name" required />
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name :</label>
                        <input type="text" class="form-control" name="last_name" required />
                    </div>
                    <div class="form-group">
                        <label for="cnp">CNP :</label>
                        <input type="text" class="form-control" name="cnp" required />
                    </div>
                    
                    <div class="form-group">
                        <label for="birthday">Birthday :</label>
                        <input type="date" class="form-control" name="birthday" required />
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender :</label>
                        <select class="custom-select w-50 d-block" name="gender" required />
                          <option value="Selectati..">Select..</option>
                          <option value="Masculin">Male</option>
                          <option value="Feminin">Female</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6" style="float:left;">
                    <div class="form-group">
                        <label for="address">Address :</label>
                        <input type="text" class="form-control" name="address" required />
                    </div>
                    <div class="form-group">
                        <label for="town">Town :</label>
                        <input type="text" class="form-control" name="town" required />
                    </div>
                    <div class="form-group">
                        <label for="county">County :</label>
                        <input type="text" class="form-control" name="county" required />
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile :</label>
                        <input type="number" class="form-control" name="mobile" required />
                    </div>
                      <button type="submit" class="btn btn-primary" style="margin-top: 31px;">Add patient</button>
                  </div>
                </form>
        </div>
      </div>
    </div>
  </div>
</div>

@include('include.footer')
@endsection