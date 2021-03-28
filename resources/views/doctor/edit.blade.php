<!-- edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mb-4">
      <div class="card uper">
        <div class="card-header">
              Edit doctor #{{$doctors->id}}
        </div>
        <div class="card-body">
          <form method="post" action="{{ route('doctors.update', $doctors->id) }}">
            <div class="col-md-6" style="float:left;">
              <div class="form-group">
                  @csrf
                  @method('PATCH')
                  <label for="first_name">First Name :</label>
                  <input type="text" class="form-control" value="{{ $doctors->first_name }}" name="first_name" required />
              </div>
              <div class="form-group">
                  <label for="last_name">Last Name :</label>
                  <input type="text" class="form-control" value="{{ $doctors->last_name }}" name="last_name" required />
              </div>
              <div class="form-group">
                  <label for="specialization_id">Specialization :</label>
                  <select class="custom-select w-50 d-block" id="specialization_id" name="specialization_id">
                    @foreach($specializations as $specialization)
                      <option value="{{ $specialization->id }}" {{ $doctors->specialization_id == $specialization->id ? 'selected' : '' }}>{{ $specialization->name }}</option>
                    @endforeach
                  </select>
              </div>
              
              <div class="form-group">
                  <label for="birthday">Birthday :</label>
                  <input type="date" class="form-control" value="{{$doctors->birthday}}" name="birthday" required />
              </div>
            </div>
            <div class="col-md-6" style="float:left;">
              <div class="form-group">
                <label for="gender">Gender :</label>
                <select class="custom-select w-50 d-block" name="gender">
                    <option value="Selectati.." <?php if($doctors->gender== "Selectati..") echo "selected"; ?>>Select..</option>
                    <option value="Masculin" <?php if($doctors->gender== "Masculin") echo "selected"; ?>>Male</option>
                    <option value="Feminin" <?php if($doctors->gender== "Feminin") echo "selected"; ?>>Female</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="town">Town :</label>
                  <input type="text" class="form-control" value="{{$doctors->town}}" name="town" required />
              </div>
              <div class="form-group">
                  <label for="mobile">Mobile :</label>
                  <input type="text" class="form-control" value="{{$doctors->mobile}}" name="mobile" required />
              </div>
              <button type="submit" class="btn btn-primary" style="margin-top: 31px;">Update doctor data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@include('include.footer')
@endsection