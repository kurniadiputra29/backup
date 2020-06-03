@extends('layouts.app')
@section('title', 'return')
@section('header')
<h1>
	RETURNS
</h1>
<ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Returns</a></li>
	<li class="active">Index Returns</li>
</ol>
@endsection
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">INDEX RETURNS</h3>
				<a href="{{route('return.create')}}" class="btn btn-info pull-right">Create</a>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th width="5%">No</th>
							<th>Renter Number</th>
							<th>Renter</th>
							<th>Item Code</th>
							<th>Action</th>
						</tr>
						@php
						$nomor=1;
						@endphp

						@foreach($data as $return)
						<tr>
							<td>{{$nomor++}}</td>
							<td>{{$return->rental_id}}</td>
							<td>{{$return->renter}}</td>
							<td>{{$return->item_code}}</td>
							<td>
								<form action="{{route('return.destroy', $return->id)}}" method="post">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$return->id}}">Detail</button>
									<a href="{{route('return.edit', $return->id)}}" class="btn btn-info">Edit</a>
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger" onclick='javascript:return confirm("Apakah anda yakin ingin menghapus return ini?")'>Hapus</button>
								</form>
								<div class="modal fade" id="{{$return->id}}">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h4>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span></button>
														<i class="fa fa-cart-plus"></i> return Detail
													</h4>
												</div>
												<div class="modal-body">
													<!-- info row -->
													<div class="row invoice-info">
														<div class="col-sm-7 invoice-col">
															From
															<address>
																<strong>Rental Camera</strong><br>
																jl. Kali Urang, KM 60<br>
																Phone: (804) 123-5432<br>
															</address>
														</div>
														<div class="col-xs-2 invoice-col" style="text-align: center;">
															User<br>
															<strong>Kurni</strong>
														</div>
														<div class="col-xs-3 invoice-col" style="text-align: center;">
															Created at<br>
															<strong>{{date('d M Y', strtotime($return->created_at))}}</strong><br>
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
																		<th width="5%">No</th>
																		<th>Renter Number</th>
																		<th>Renter</th>
																		<th>Item Code</th>
																	</tr>
																</thead>
																<tbody>
																	@php
																	$nomor=1;
																	@endphp
																	@foreach($data as $return)
																	<tr>
																		<td>{{$nomor++}}</td>
																		<td>{{$return->rental_id}}</td>
																		<td>{{$return->renter}}</td>
																		<td>{{$return->item_code}}</td>
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
														<!-- /.col -->
													</div>
													<!-- /.row -->

													<div class="row">
														<!-- accepted payments column -->
														<div class="col-xs-6">
															<p class="lead">Payment Methods: </p>

														</div>
														<!-- /.col -->
														<div class="col-xs-6">
															<div class="table-responsive">
																<table class="table">
																	<tbody>
																		<tr>
																			<th style="width:50%">Subtotal:</th>
																		</tr>
																			
																		</tr>
																		<tr>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
														<div class="row no-print">
															<div class="col-xs-12">
																<a href="#" target="_blank" class="btn btn-primary pull-left"><i class="fa fa-print"></i> Print</a>
																	<input type="hidden" class="form-control text-center" name="id">
																	<input type="hidden" class="form-control text-center" name="email">
																	<button type="submit" class="btn btn-primary pull-left" style="margin-left: 10px;">Send Email</button>
																</form>
																<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
															</div>
														</div>
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
					</tbody></table>
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix">
					<ul class="pagination pagination-sm no-margin pull-right">
						<li>{{$data->links()}}</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /.col -->
	</div>
	@endsection