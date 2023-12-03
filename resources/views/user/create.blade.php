@extends('layouts.master')

@section('content')


    <div class="container">

        <h1>Create User</h1>
        <form action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">No. Telp</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan No. Telp">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Alamat">
            </div>
            <input type="submit" name ="submit" value="Save" class="btn btn-success"></button>
        </form>

    </div>

    @endsection


