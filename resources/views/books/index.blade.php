@extends('layouts.master')

@section('content')

    <div class="container">
        <a class="btn btn-info" href="/books/create" >Add Books</a>
        <h1>Data Buku</h1>
     <table class="table table-hover">

         <tr>
             <th>ID</th>
             <th>Book Name</th>
             <th>Author</th>
             <th>Published Date</th>

         </tr>
         @foreach($books as $u)

         <tr>
             <td>{{$u['id']}}</td>
             <td>{{$u['book name']}}</td>
             <td>{{$u['author']}}</td>
             <td>{{$u['published_at']}}</td>
             <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                 <a class="btn btn-primary" href="/books/edit">Edit</a>
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


