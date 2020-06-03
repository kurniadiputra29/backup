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
	<form class="form-horizontal" action="{{ route('item.update', $data2->id) }}" method="post">
		@csrf
		@method('PUT')
		<div class="box-body">
			<div class="form-group">
				<label for="code" class="col-sm-2 control-label">Code</label>
				<div class="col-sm-10">
					<input type="text" name="code" class="form-control" id="code" placeholder="Code" value="{{ $data2->code }}">
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ $data2->name }}">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Category</label>
				<div class="col-sm-10">
					<select class="form-control" name="category_id" >
						<option class="col-sm-10" value="">~~Pilih Category~~</option>
						@foreach($categories as $category)
						<option class="col-sm-10" value="{{$category->id}}" {{$data2->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
						@endforeach
					</select>
				</div>
			</div>


			<div class="form-group">
				<label for="type" class="col-sm-2 control-label">Type</label>
				<div class="col-sm-10">
					<input type="text" name="type" class="form-control" id="type" placeholder="Type" value="{{ $data2->type }}">
				</div>
			</div>
			<div class="form-group">
				<label for="price" class="col-sm-2 control-label">Price</label>
				<div class="col-sm-10">
					<input type="text" name="price" class="form-control" id="price" placeholder="10000" value="{{ $data2->price }}">
				</div>
			</div>
			<div class="form-group">
				<label for="status" class="col-sm-2 control-label">Status</label>
				<div class="col-sm-10 radio">
					<label>
						<input type="radio" name="status" id="status" value="1" {{($data2->status)?'':'checked'}}>Ada
					</label>
					<br>
					<label>
						<input type="radio" name="status" id="status" value="0" {{($data2->status)?'':'checked'}}>Tidak Ada
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="note" class="col-sm-2 control-label">Note</label>
				<div class="col-sm-10" style="margin-top: 10px;">
					<textarea name="note" class="form-control" rows="3" placeholder="Enter ..." id="note">{{ $data2->note }}</textarea>
				</div>
			</div>
			<div class="box-footer">
				<a href="{{route('item.index')}}" class="btn btn-default">Cancel</a>
				<button type="submit" class="btn btn-info pull-right">Submit</button>
			</div>
		</div>
	</form>
</div>
@endsection