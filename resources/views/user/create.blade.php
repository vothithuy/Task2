@extends('templates.master')

@section('title','Create User')

@section('content')

<div class="page-header"><h4>User</h4></div>

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

<?php //Form thêm mới học sinh?>
<p><a class="btn btn-primary" href="/user">List User</a></p>
<div class="col-xs-4 col-xs-offset-4">
	<center><h4>Add User</h4></center>
	<form action="{{ url('/user/create') }}" method="post">
		<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
		<div class="form-group">
			<label for="first_name">first_name</label>
			<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Please Enter First_name"  required />
        </div>
        <div class="form-group">
			<label for="last_name">last_name</label>
			<input type="text" class="form-control" id="last_name" name="first_name" placeholder="Please Enter Last_name"  required />
        </div>
        <div class="form-group">
			<label for="email">email</label>
			<input type="text" class="form-control" id="email" name="email" placeholder="Please Enter email" required />
		</div>
		<div class="form-group">
			<label for="phone">Phone</label>
			<input type="text" class="form-control" id="phone"  name="phone" placeholder="Please Enter phone" maxlength="15" required />
        </div>		
        <div class="form-group">
			<label for="password">password</label>
			<input type="text" class="form-control" id="password" name="password" placeholder="Please Enter password" required />
		</div>
		<div class="form-group">
			<label for="avatar">avatar</label>
			<input type="text" class="form-control" id="avatar"  name="avatar" placeholder="Please Enter avatar" maxlength="15" required />
        </div>	
		<center><button type="submit" class="btn btn-primary">Add</button></center>
	</form>
</div>

@endsection