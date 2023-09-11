@extends('dashboard.dashboard_layouts.master')

@section('title','Create New Admin')


@section('css')
@endsection

@section('title_page1')
Users
@endsection

@section('title_page2')
Create New User
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group" >
          <label for="name">User Name:</label>
          <input type="text" name="name" class="form-control" id="name"  placeholder="Enter user name">
          @error('name') <span class="text-danger">{{ $message }}</span>   @enderror

        </div>

        <div class="form-group">
          <label  for="email">User Email:</label>
          <input type="email" name="email" class="form-control" id="email"  placeholder="Enter user email ">
          @error('email') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>

        <div class="form-group">
            <label  for="admin_password">User Password:</label>
            <input type="password" name="password" class="form-control" id="password"  placeholder="Enter user password ">
            @error('password') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>

        <br>
        <input type="submit" value="Add User" class="btn btn-success"><br>
      </form>
 





@endsection

@section('scripts')

@endsection