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
            There are {{ $users->count() }} registered users. 
          </p>
                                
          <a class="" href="/users/create" style="float:right;">
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
                  <th>Name user</th>
                  <th>Email</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    <a href="{{ route('users.edit',$user->id)}}" style="display: inline;">
                      <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-edit"></i>
                      </button>
                    </a>  

                    <form action="{{ route('users.destroy', $user->id)}}" method="post" style="display: inline;">
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