@extends('client.layout.index2')
@section('title', 'Login')
@section('client_content')

	@include('auth.components.login.breadcrumb')
	<!-- BEGIN SIDEBAR & CONTENT -->
	<div class="row margin-bottom-40">
		@include('auth.components.login.sidebar')

		@include('auth.components.login.content')
	</div>
	<!-- END SIDEBAR & CONTENT -->

@endsection

