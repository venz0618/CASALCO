@extends('admin.index')
@section('title', 'Member')
@section('admin_content')

<table class="table table-bordered table-striped table-sm" id="example2">
	<thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Account Number</th>
      <th>Unit</th>
      <th>Date Registered</th>
    </tr>
  </thead>
  <tbody>
    {{ $member }}
  </tbody>
</table>

@endsection