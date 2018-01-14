<?php
namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
   public function index()
   {
    $categories = Category::all();
      return view('category.index', compact('categories'));
   }
   public function create()
   {
    return view('category.create');
    // resources / views / category / create.blade.php
   }
   public function store(Request $request)
   {
    Category::create($request->all());
      return redirect('category');
   }
   public function edit(Category $category)
    {
     return view('category.edit', compact('category'));
    }
 
     public function show(Category $category)
    {
     return view('category.show', compact('category'));
    }
 
    public function update(Request $request, Category $category)
    {
     $category->update($request->all());
     return redirect('category');
    }
 
    public function destroy(Request $request, Category $category)
    {
     $category->delete();
     return redirect('category');
    }
}