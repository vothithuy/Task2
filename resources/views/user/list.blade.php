@extends('templates.master')

@section('content')

<?php //Hiển thị thông báo thành công?>
<div class="page-header"><h4>Admin-User</h4></div>

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

<?php //Hiển thị danh sách user?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="table-responsive">
			<p><a class="btn btn-primary" href="/user/create" >Add</a></p>
            <table id="DataList" class="table table-striped table-bordered table-hover" >
				<thead>
					<tr>
						<th>ID</th>
						<th>First_name</th>
                        <th>Last_name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>password</th>
                        <th>avatar</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
				<?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
				@foreach($listuser as $key => $user)
					<tr class="odd gradeX" center>
					
						<td>{{ $key+1 }}</td>
					
						<td>{{ $user->first_name }}</td>
						
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
					
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->password }}</td>
						
						<td>{{ $user->avatar }}</td>
					
						<td><a href="/user/{{ $user->id }}/edit">Edit</a></td>
						<td><a href="/user/{{ $user->id }}/delete">Delete</a></td>
					</tr>
				
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection