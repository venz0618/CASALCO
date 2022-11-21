@extends('officer.index')
@section('title', 'Membership')
@section('officer_content')

<table class="table table-bordered table-striped" id="example2">
	<thead>
		<tr>
			<th>Fist Name</th>
            <th>Last Name</th>
			<th>Address</th>
			<th>Unit</th>
           
            <th>Status</th>
            <th>Action</th>

		</tr>
	</thead>
	<tbody>
            {{-- @foreach($member_app as $member)
							<tr>
								<td>
								{{$member -> Fname}}
								</td>
								<td>
								{{$member -> Lname}}
								</td>
								<td>
								{{$member -> address}}
								</td>
								<td>
								{{$member -> unit}}
								</td>
								
								<td>
								@if ($member->status == 0)
									
									<span class="badge badge-danger">Pending</span>
							@else
									<span class="badge badge-success">Pre-Approved</span>
							@endif
								</td>
								<td>
							<a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_bus"><i class="fas fa-eye"></i> View</a>
							</td>
							</tr>
            @endforeach --}}
		
	</tbody>
</table>



@endsection