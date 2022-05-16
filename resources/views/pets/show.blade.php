@extends('pets.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Edit Record</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID: {{ $pet->id }}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name: {{ $pet->name }} </strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Animal Type: {{ $pet->animal_type }} </strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Owner: {{ $pet->owner }}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Owner's Address: {{ $pet->address }}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a href="{{ route('pets.edit',$pet->id) }}"><button type="button" class="btn btn-success">Edit</button></a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <br>
            <a class="btn btn-secondary btn-sm" href="{{ route('pets.index') }}">Back</a>
        </div>
    </div>
@endsection