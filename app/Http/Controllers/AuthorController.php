<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
   public function index()
   {
      $authors = Author::all();
      return view('author.index', compact('authors'));
   }

   public function create()
   {
      return view('author.create');
      // resources / views / category / create.blade.php

   }

   public function store(Request $request)
   {
      Author::create($request->all());
      return redirect('author');
   }
   public function edit(Author $author)
    {
     return view('author.edit', compact('author'));
    }
 
     public function show(Author $author)
    {
     return view('author.show', compact('author'));
    }
 
    public function update(Request $request, Author $author)
    {
     $author->update($request->all());
     return redirect('author');
    }
 
    public function destroy(Request $request, Author $author)
    {
     $author->delete();
     return redirect('author');
    }
}
