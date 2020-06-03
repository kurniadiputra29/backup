@extends('layouts.app')
@section('title', 'category')
@section('header')
<h1>
	ITEM
</h1>
<ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Product</a></li>
	<li><a href="{{route('item.index')}}">Item</a></li>
	<li class="active" >Create Item</li>
</ol>
@endsection
@section('content')
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">CREATE ITEM</h3>
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
	<form class="form-horizontal" action="{{ route('return.update', $returns->id) }}" method="post">
		@csrf
		@method('PUT')
		<div class="box-body">
			<div class="form-group">
				<label class="col-sm-2 control-label">Rental</label>
				<div class="col-sm-10">
					<select class="form-control" name="category_id" >
						<option class="col-sm-10" value="">~~Pilih Rental~~</option>
						@foreach($rentals as $rental)
						<option class="col-sm-10" value="{{$rental->id}}" {{$returns->rental_id == $rental->id ? 'selected' : ''}}>{{$returns->rental_id}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Rental</label>
				<div class="col-sm-10">
					<select class="form-control" name="category_id" >
						<option class="col-sm-10" value="">~~Pilih Rental~~</option>
						@foreach($rentals as $rental)
						<option class="col-sm-10" value="{{$rental->id_card}}" {{$returns->id_card == $rental->id_card ? 'selected' : ''}}>{{$returns->id_card}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="status" class="col-sm-2 control-label">Status</label>
				<div class="col-sm-10 radio">
					<label>
						<input type="radio" name="status" id="status" value="1" {{($returns->status)?'checked':''}}>Normal
					</label>
					<br>
					<label>
						<input type="radio" name="status" id="status" value="0" {{($returns->status)?'':'checked'}}>Kendala
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="note" class="col-sm-2 control-label">Note</label>
				<div class="col-sm-10" style="margin-top: 10px;">
					<textarea name="note" class="form-control" rows="3" placeholder="Enter ..." id="note">{{ $returns->note }}</textarea>
				</div>
			</div>
			<div class="box-footer">
				<a href="{{route('return.index')}}" class="btn btn-default">Cancel</a>
				<button type="submit" class="btn btn-info pull-right">Submit</button>
			</div>
		</div>
	</form>
</div>
@endsection