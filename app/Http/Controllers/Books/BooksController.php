<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $books = Books::all();
        return view('books.index',compact(['books']));
        /*
        $model = new Books();
        $data = $model->select(
        'id',
        'book_name',
        'author',
        'published_at',
        'created_at',
        'updated_at'
        )->get()->toArray();

        return view('books/index', compact('data'));
    }*/

    }
    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        dd($request->except(['_token','submit']));
        Books::create($request->all());
    }
}

