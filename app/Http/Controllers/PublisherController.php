<?php
namespace App\Http\Controllers;
use App\Publisher;
use Illuminate\Http\Request;
class PublisherController extends Controller
{
    public function index()
   {
   	$publishers = Publisher::all();
      return view('publisher.index', compact('publishers'));
   }
   public function create()
   {
   	return view('publisher.create');
   	// resources / views / category / create.blade.php
   }
   public function store(Request $request)
   {
   	Publisher::create($request->all());
      return redirect('publisher');
   }
   public function edit(Publisher $publisher)
    {
     return view('publisher.edit', compact('publisher'));
    }
 
     public function show(Publisher $publisher)
    {
     return view('publisher.show', compact('publisher'));
    }
 
    public function update(Request $request, Publisher $publisher)
    {
     $publisher->update($request->all());
     return redirect('publisher');
    }
 
    public function destroy(Request $request, Publisher $publisher)
    {
     $publisher->delete();
     return redirect('publisher');
    }
}