@extends('admin.index')
@section('title', 'Officers Accounts')
@section('admin_content')

<button class="btn btn-sm btn-success mb-2" data-toggle="modal" data-target="#myModal">Add Officer's Account</button>

<table class="table table-bordered table-striped table-sm" id="example2">
	<thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>User Type</th>
      
      <!-- <th>Date Registered</th>  -->
    </tr>
  </thead>
  <tbody>
 		@foreach ($user  as $u)
			<tr>
				<td>{{ $u->username }}</td>
				<td>{{ $u->email }}</td>
				<td>
					@if($u->user_type == 1)
						<span class="badge badge-info">Admin</span>
					@else
						<span class="badge badge-info">Officer</span>
					@endif
				</td>
			</tr>
    @endforeach
  </tbody>
</table>

<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
     <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
           
        </div>
        <form action="{{ url('/admin/accounts') }}" method="POST">
            @csrf
            <!-- Modal body -->
            <div class="modal-body">
            <h4>Add CASALCO officer Account</h4>
            <div class="border border-danger mb-5"></div>
						<input type="hidden" value="2" name="user_type">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label for="First Name" class="form-label">Name</label>
									<input type="text" class="form-control" name="username" placeholder="Name">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label for="First Name" class="form-label">Email</label>
									<input type="text" class="form-control" name="email" placeholder="Email" >
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label for="First Name" class="form-label">Password</label>
									<input type="password" class="form-control" name="password" placeholder="Password">
								</div>
							</div>
						</div>
            <!-- Modal footer -->
					<div class="modal-footer">
						
						<button type="submit" class="btn btn-success w-100">Submit</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        	</div>
				</form>
     </div>
  </div>
</div>
  </div>

@endsection