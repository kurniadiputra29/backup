@extends('layouts.app')

@section('title', 'Create Category')

@section('header')
  <h1>
    Create Category
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('categories.index') }}">Categories</a></li>
    <li class="active">Create Category</li>
  </ol>
@endsection

@section('content')
<!-- Main content -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
        </div>

        <form method="post" action="{{ route('categories.store') }}">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="name">Category Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <a href="{{ route('categories.index') }}" class="btn btn-danger"><i class="fa fa-undo"></i> Back</a>
            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
<!-- /.content -->
@endsection
