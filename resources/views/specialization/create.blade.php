<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card uper">
        <div class="card-header">
              Adauga specializare medici
        </div>
        <div class="card-body">
                <form method="post" action="{{ route('specializations.store') }}">
                  <div class="col-md-6" style="float:left;">
                    <div class="form-group">
                        @csrf
                        <label for="name">Nume :</label>
                        <input type="text" class="form-control" name="name" required />
                    </div>
                  </div>
                  <div class="col-md-6" style="float:left;">
                    
                    <button type="submit" class="btn btn-primary" style="margin-top: 31px;">Adauga specializare</button>
                  </div>
                </form>
        </div>
      </div>
    </div>
  </div>
</div>

@include('include.footer')
@endsection