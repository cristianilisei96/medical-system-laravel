<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mb-4">
      <div class="card uper">
        <div class="card-header">
              Add user
        </div>
        <div class="card-body">
                <form method="post" action="{{ route('users.store') }}">
                  <div class="col-md-6" style="float:left;">
                    <div class="form-group">
                        @csrf
                        <label for="name">Name :</label>
                        <input type="text" class="form-control" name="name" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" name="email" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password" class="form-control" name="password" required />
                    </div>
                  </div>
                  <div class="col-md-6" style="float:left;">
                      <button type="submit" class="btn btn-primary" style="margin-top: 31px;">Add user</button>
                  </div>
                </form>
        </div>
      </div>
    </div>
  </div>
</div>

@include('include.footer')
@endsection