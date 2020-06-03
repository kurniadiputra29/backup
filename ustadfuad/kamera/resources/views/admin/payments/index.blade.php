@extends('layouts.app')

@section('title', 'Payments')

@section('header')
	<h1>
		Dashboard
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
@endsection

@section('content')

	<!-- BASIC TABLE -->
	{{-- <div class="box">
		<div class="box-header with-border">
			<h3>Payments List</h3>
			<a class="btn btn-primary pull-right" href="{{ route('payments.create') }}">Create</a>
		</div>
		<div class="box-body">
			<table class="table table-condensed" id="payments">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Created At</th>
						<th>Action</th>
					</tr>
				</thead>
			</table>
		</div>
	</div> --}}
	<!-- END BASIC TABLE -->

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">PAYMENT LISTS</h3>
			<a href="{{route('payments.create')}}" class="btn btn-info pull-right">Create</a>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table class="table table-bordered table-striped" id="payments">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Created At</th>
						<th style="text-align: center;">Action</th>
					</tr>
				</thead>
				@if (session('Success'))
				<div class="alert alert-success">
					{{ session('Success') }}
				</div>
				@endif
			</table>
		</div>
		<!-- /.box-body -->
	</div>

@endsection

@section('script')

	<script src="{{asset('AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
	<script type="text/javascript">
		var table;
		$(function() {
			var table = $('#payments').DataTable({
				processing: true,
				serverSide: true,
				ajax: "{{ route('json.payment') }}",
				columns: [
				{data: 'id', searchable:false},
				{data: 'name'},
				{data: 'created_at', orderable: false, searchable: false},
				{data: 'action', name:'action', orderable: false, searchable: false},
				],
			});
		});
	</script>

@endsection