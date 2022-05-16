@extends('pets.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <br><br>
                <h2>Edit Pets</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Invalid Value <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('pets.update',$pet->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                <input type="number" name="id" class="form-control" placeholder="ID">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Animal Type:</strong>
                <input type="text" name="animal_type" class="form-control" placeholder="Type">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Owner:</strong>
                <input type="text" name="owner" class="form-control" placeholder="Owner">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Owner's Address:</strong>
                <input type="text" name="address" class="form-control" placeholder="Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Confirm</button>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <br>
            <a class="btn btn-secondary btn-sm" href="{{ route('pets.index') }}">Back</a>
        </div>
    </div>
   
    </form>
@endsection