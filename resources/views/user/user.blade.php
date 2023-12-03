@extends('layouts.master')

@section('content')

    <div class="container">
        <a class="btn btn-info" href="create" >Add User</a>
        <h1>Data User</h1>
     <table class="table table-hover">
         @foreach($data as $u)

         <tr>
             <th>Nama</th>
             <th>email</th>
             <th>Telp</th>
             <th>Alamat</th>
             <th>Aksi</th>

         </tr>
         <tr>
             <td>{{$u['nama']}}</td>
             <td>{{$u['email']}}</td>
             <td>{{$u['telp']}}</td>
             <td>{{$u['alamat']['street']}}, {{$u['alamat']['postcode']}}</td>
             <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                 <a class="btn btn-primary" href="/users/index/edit">Edit</a>
                 <form>
                     @csrf
                     <input type="submit" value="Delete" class="btn btn-danger">
                 </form>
                </div>
             </td>
         </tr>
         @endforeach
     </table>
    </div>
@endsection

