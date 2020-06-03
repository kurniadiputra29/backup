@extends('layouts.app')
@section('title', 'category')
@section('header')
<h1>
  RETURN
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('return.index')}}">Return</a></li>
  <li class="active" >Create Return</li>
</ol>
@endsection
@section('content')
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">CREATE RETURN</h3>
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
  <form class="form-horizontal" action="{{route('return.store')}}" method="post">
    @csrf
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Rentals</label>
        <div class="col-sm-10">
          <select class="form-control" name="rental_id" >
            <option class="col-sm-10" value="">~~Pilih Rentals~~</option>
            @foreach($data as $row)
            <option class="col-sm-10" value="{{$row->id}}">{{$row->id_card}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Rentals</label>
        <div class="col-sm-10">
          <select class="form-control" name="id_card" >
            <option class="col-sm-10" value="">~~Pilih Rentals~~</option>
            @foreach($data as $row)
            <option class="col-sm-10" value="{{$row->id_card}}">{{$row->id_card}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="status" class="col-sm-2 control-label">Status</label>
        <div class="col-sm-10 radio">
          <label>
            <input type="radio" name="status" id="status" value="1">Normal
          </label>
          <br>
          <label>
            <input type="radio" name="status" id="status" value="0" >Kendala
          </label>
        </div>
      </div>
      <div class="form-group">
        <label for="note" class="col-sm-2 control-label">Note</label>
        <div class="col-sm-10" style="margin-top: 10px;">
          <textarea name="note" class="form-control" rows="3" placeholder="Enter ..." id="note">{{ old('note') }}</textarea>
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