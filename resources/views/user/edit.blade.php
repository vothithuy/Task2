@extends('templates.master')

@section('content')

<div class="page-header"><h4>Admin-User</h4></div>

<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị form sửa user?>
<p><a class="btn btn-primary" href="/user">List user</a></p>
<div class="col-xs-4 col-xs-offset-4">
	<center><h4>Edit User</h4></center>
	<form action="{{ url('/user/update') }}" method="post">
		<input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}" />
		<input type="hidden" id="id" name="id" value="{!! $getUserById[0]->id !!}" />
		<div class="form-group">
			<label for="first_name">First_name</label>
			<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Please Enter First_name" value="{{ $getUserById[0]->first_name }}" required />
		</div>
		<div class="form-group">
			<label for="last_name">Last_name</label>
			<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Please Enter Last_name"  value="{{ $getUserById[0]->last_name }}" required />
        </div>
        <div class="form-group">
			<label for="email">email</label>
			<input type="text" class="form-control" id="email" name="email" placeholder="Please Enter email" value="{{ $getUserById[0]->email }}" required />
		</div>
		<div class="form-group">
			<label for="phone">phone</label>
			<input type="text" class="form-control" id="phone" name="phone" placeholder="Please Enter phone"  value="{{ $getUserById[0]->phone }}" required />
        </div>
        <div class="form-group">
			<label for="password">Password</label>
			<input type="text" class="form-control" id="password" name="password" placeholder="Please Enter password" value="{{ $getUserById[0]->password}}" required />
		</div>
		<div class="form-group">
			<label for="avatar">avatar</label>
			<input type="text" class="form-control" id="avatar" name="avatar" placeholder="Please Enter avatar"  value="{{ $getUserById[0]->avatar }}" required />
		</div>
		<center><button type="submit" class="btn btn-primary">EDIT</button></center>
	</form>
</div>

@endsection