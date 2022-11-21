@extends('admin.index')
@section('title', 'Approved Membership Applications')
@section('admin_content')

<table class="table table-bordered table-striped table-sm" id="example2">
	<thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Unit</th>
      <th>Date Approved</th>
      <th>Membership Type</th>
      <th>Status</th>
      {{-- <th>Actions</th> --}}
    </tr>
  </thead>
  <tbody>
    @foreach ($membership as $m)
        <tr>
        <td>{{ $m->first_name }}</td>
        <td>{{ $m->last_name }}</td>
        <td>{{ $m->unit }}</td>
        <td>{{ $m->updated_at }}</td>
        <td>
          @if ($m->membership_type == 0)
            <span class="badge badge-info">Online</span>
          @else
            <span class="badge badge-info">Walk-in</span>
          @endif
        </td>
        <td>
            <span class="badge badge-success">Approved</span>
        </td>
        {{-- <td>
            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal{{ $m->id }}">Details</button>
        </td> --}}
        </tr>
    @endforeach
  </tbody>
</table>

@endsection