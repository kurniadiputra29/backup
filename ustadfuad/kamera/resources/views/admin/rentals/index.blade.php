@extends('layouts.app')

@section('title', 'Rentals')

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

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">RENTAL LISTS</h3>
			<a href="{{route('rentals.create')}}" class="btn btn-info pull-right">Create</a>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Id_card</th>
						<th>Renter</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Item Code</th>
						<th style="text-align: center;">Action</th>
					</tr>
				</thead>
				@if (session('Success'))
				<div class="alert alert-success">
					{{ session('Success') }}
				</div>
				@endif
				<tbody>
					@php
					$no = 1;
					@endphp

					@foreach($rentals as $rental)
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $rental->id_card }}</td>
						<td>{{ $rental->renter }}</td>
						<td>{{ $rental->address }}</td>
						<td>{{ $rental->phone }}</td>
						<td>{{ $rental->item_code }}</td>
						<td>
							<form action="{{route('rentals.destroy', $rental->id)}}" method="post">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$rental->id}}">Detail</button>
								@csrf
								@method('DELETE')
								<a href="{{route('rentals.edit', $rental->id)}}" class="btn btn-primary">Edit</a>
								<button type="submit" class="btn btn-danger" onclick='javascript:return confirm("Apakah anda yakin ingin menghapus data ini?")'>Hapus</button>
							</form>
							<div class="modal fade" id="{{$rental->id}}">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
												<i class="fa fa-cart-plus"></i> Order Detail
											</h4>
										</div>
										<div class="modal-body">
											<!-- info row -->
											<div class="row invoice-info">
												<div class="col-sm-4 invoice-col">
													From
													<address>
														<strong>Toko Adi Putro</strong><br>
														jl. Kali Urang, KM 60<br>
														Barat Pom Bensin, Pokoh<br>
														Phone: (804) 123-5432<br>
														Email: info@adiputro.com
													</address>
												</div>
												<div class="col-sm-3 invoice-col" style="text-align: center;">
													Payment<br>
													<strong>{{$rental->payment->name}}</strong>
												</div>
												<div class="col-xs-2 invoice-col" style="text-align: center;">
													User<br>
													<strong>{{$rental->user->name}}</strong>
												</div>
												<div class="col-xs-3 invoice-col" style="text-align: center;">
													Created at<br>
													<strong>{{date('d-M-Y', strtotime($rental->created_at))}}</strong><br>
													<strong>{{date('H:i', strtotime($rental->created_at))}} WIB</strong>
												</div>
												<!-- /.col -->
											</div>
											<!-- /.row -->

											<!-- Table row -->
											<div class="row">
												<div class="col-xs-12 table-responsive">
													<table class="table table-striped">
														<thead>
															<tr>
																<th>Qty</th>
																<th>Price Total</th>
																<th>Period</th>
																<th>Deadline</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>{{ $rental->qty }}</td>
																<td>{{ $rental->price_total }}</td>
																<td>{{ $rental->periode }}</td>
																<td>{{ $rental->deadline }}</td>
															</tr>
														</tbody>
													</table>
												</div>
												<!-- /.col -->
											</div>
											<!-- /.row -->
											
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
					@endforeach
					@if (session('Success'))
					<div class="alert alert-success">
						{{ session('Success') }}
					</div>
					@endif
				</tbody>
			</table>
		</div>
		<!-- /.box-body -->
	</div>

@endsection

{{-- @section('script')

	<script src="{{asset('AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
	<script type="text/javascript">
		var table;
		$(function() {
			var table = $('#rentals').DataTable({
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

@endsection --}}