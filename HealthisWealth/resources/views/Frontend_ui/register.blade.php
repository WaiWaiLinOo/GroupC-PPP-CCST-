@extends('Frontend_ui.layouts.app')
@section('content')
<form method="POST" action="{{ route('createUser') }}">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="profile" class="form-label">User Profile</label>
        <input type="file" class="form-control" id="profile" name="profile">
    </div>
    <label for="text" class="form-label">*option(if you have certificate)</label>
    <div class="mb-3">
        <label for="certificate" class="form-label">Certificate</label>
        <input type="file" class="form-control" id="certificate" name="certificate">
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Date Of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="address" class="form-control" id="address" name="address">
    </div>
    <button type="submit" class="btn btn-primary" >Register</button>
  </form>
@endsection
