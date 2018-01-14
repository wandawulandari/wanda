<?php
namespace App\Http\Controllers;
use App\Author;
use App\Publisher;
use App\Book;
use Illuminate\Http\Request;
class BookController extends Controller
{
    public function index()
	{
		$books = Book::all();
		return view('book.index', compact('books'));
	}
	public function create()
		{
			$authors = Author::all();
			$publishers = Publisher::all();
			return view('book.create',compact('authors', 'publishers'));
		}
		public function store(Request $request)
		{
			Book::create($request->all());
      		return redirect('book');
		}
		public function show(Book $book)
		{
			return view('book.show', compact('book'));
		}
		public function edit(Book $book)
		{
			$authors = Author::all();
			$publishers = Publisher::all();
			return view('book.edit',compact('authors', 'publishers', 'book'));
		}
		public function update(Request $request, Book $book)
		{
			$book->update($request->all());
     		return redirect('book');
		}
		public function destroy(Book $book)
		{ 
			$book->delete(); return redirect('book');
		}
}