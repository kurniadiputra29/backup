@extends('layouts.app')

@section('title', 'Create Rentals')

@section('header')

	<h1>
		RENTAL
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('rentals.index')}}"> Rental</a></li>
		<li><a href="{{route('rentals.index')}}"> Index Rental</a></li>
		<li class="active" >Create Rental</li>
	</ol>
	
@endsection

@section('content')

	<div class="box box-info">
	    <div class="box-header with-border">
	       <h3 class="box-title">CREATE RENTAL</h3>
	    </div>
	    @if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	    @endif
	    <form class="form-horizontal" action="{{route('rentals.store')}}" method="post">
	        @csrf
			<div class="box-body">
				<div class="form-group">
					<label for="id_card" class="col-sm-2 control-label">Id Card</label>
					<div class="col-sm-10">
						<input type="text" name="id_card" class="form-control" id="id_card" placeholder="Id Card" value="{{ old('id_card') }}">
					</div>
				</div>
				<div class="form-group">
					<label for="renter" class="col-sm-2 control-label">Renter</label>
					<div class="col-sm-10">
						<input type="text" name="renter" class="form-control" id="renter" placeholder="Renter" value="{{ old('renter') }}">
					</div>
				</div>
				<div class="form-group">
					<label for="address" class="col-sm-2 control-label">Address</label>
					<div class="col-sm-10">
						<input type="text" name="address" class="form-control" id="address" placeholder="Address" value="{{ old('address') }}">
					</div>
				</div>
				<div class="form-group">
					<label for="phone" class="col-sm-2 control-label">Phone</label>
					<div class="col-sm-10">
						<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="{{ old('phone') }}">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Item Code</label>
					<div class="col-sm-10">
						<select class="form-control select2" name="item_code" required>
							<option class="col-sm-10" value="">~~Pilih Item~~</option>
							@foreach($items as $item)
							<option class="col-sm-10" value="{{$item->code}}">{{$item->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="qty" class="col-sm-2 control-label">Qty</label>
					<div class="col-sm-10">
						<input type="text" name="qty" class="form-control" id="qty" placeholder="Qty" value="{{ old('qty') }}">
					</div>
				</div>
				<div class="form-group">
					<label for="price_total" class="col-sm-2 control-label">Price Total</label>
					<div class="col-sm-10">
						<input type="text" name="price_total" class="form-control" id="price_total" placeholder="Price Total" value="{{ old('price_total') }}">
					</div>
				</div>
				<div class="form-group">
					<label for="periode" class="col-sm-2 control-label">Periode</label>
					<div class="col-sm-10">
						<input type="text" name="periode" class="form-control" id="periode" placeholder="Periode" value="{{ old('periode') }}">
					</div>
				</div>
				<div class="form-group">
					<label for="deadline" class="col-sm-2 control-label">Deadline</label>
					<div class="col-sm-10">
						<input type="date" name="deadline" class="form-control" id="deadline" placeholder="Deadline" value="{{ old('deadline') }}">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">User</label>
					<div class="col-sm-10">
						<select class="form-control select2" name="user_id" required>
							<option class="col-sm-10" value="">~~Pilih User~~</option>
							@foreach($users as $user)
							<option class="col-sm-10" value="{{$user->id}}">{{$user->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Payment</label>
					<div class="col-sm-10">
						<select class="form-control select2" name="payment_id" required>
							<option class="col-sm-10" value="">~~Pilih Payment~~</option>
							@foreach($payments as $payment)
							<option class="col-sm-10" value="{{$payment->id}}">{{$payment->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
	        <div class="box-footer">
	            <a href="{{route('rentals.index')}}" class="btn btn-default">Cancel</a>
	            <button type="submit" class="btn btn-info pull-right">Submit</button>
	        </div>
	    </form>
	</div>
	
@endsection