@extends('pets.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <h1 style = "font-family:Slabo"><center>Wonder Pets</h1>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pets.create') }}"> Add new pet</a>
                <br>
                <br>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th width="100px">Name</th>
            <th>Animal Type</th>
            <th>Owner</th>
            <th width="250px">Address</th>
        </tr>
        @foreach ($pets as $pet)
        <tr>
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->animal_type }}</td>
            <td>{{ $pet->owner }}</td>
            <td>{{ $pet->address }}</td>

            <td>
                <form action="{{ route('pets.destroy',$pet->id) }}" method="POST">
   
                <center> <a class="btn btn-info" href="{{ route('pets.show',$pet->id) }}">Show</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</center></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection