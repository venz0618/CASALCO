@extends('admin.index')
@section('title', 'Member List')
@section('admin_content')

<table class="table table-bordered table-striped table-sm" id="example2">
	<thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Account Number</th>
      <th>Unit</th>
      <th>Date Applied</th>
			<th>Date Approved</th>
    </tr>
  </thead>
  <tbody>
    @foreach($member as $m)
			<tr>
				<td>{{ $m->first_name }}</td>
				<td>{{ $m->last_name }}</td>
				<td>{{ $m->acc_id }}</td>
				<td>{{ $m->unit }}</td>
				<td>{{ $m->created_at }}</td>
				<td>{{ $m->updated_at }}</td>
			</tr>
    @endforeach
  </tbody>
</table>


@endsection