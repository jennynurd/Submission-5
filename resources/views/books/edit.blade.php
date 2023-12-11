@extends('layouts.master')

@section('content')


    <div class="container">

<h1>Edit Data Buku</h1>

<form action="">
    <div class="form-group">
        <label for="exampleInputEmail1">ID</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Book Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Author</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Published Date</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    </div>
    <input type="submit" name ="submit" value="Save" class="btn btn-success"></button>

</form>
    </div>

    @endsection
