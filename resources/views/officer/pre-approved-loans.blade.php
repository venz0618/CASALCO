@extends('officer.index')
@section('title', 'Loan')
@section('officer_content')

<div class="col-md-12">

      
            <table class="table table-bordered table-striped table-sm" id="example5">
                <thead>
                <tr>
                  <th>First Name</th>
                  <th>Account No</th>
                  {{-- <th>Loan Category</th> --}}
                  {{-- <th>Image</th> --}}
                  <th>Loan Type</th>
                  <th>Date Applied</th>
                  <th>Status</th>
                  {{-- <th>Actions</th> --}}
                </tr>
              </thead>
              <tbody>
                
               @foreach ($loan as $l)
                  <tr>
                   <td>{{$l->name_of_member}}</td>
                   <td>{{$l->account_no}}</td>
                   <td>{{$l->loan_type}}</td>
                   <td>{{$l->created_at}}</td>
                 
                   <td> @if($l->is_approved==1)
                    <span class="badge badge-secondary">Pre-Approved</span>
                  @endif
                </td>
                   {{-- <td>
                      <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal{{ $l->id }}">Details</button>
                    </td>  --}}
                </tr>
               @endforeach
                
              </tbody>
            </table>
       

</div>

@endsection
